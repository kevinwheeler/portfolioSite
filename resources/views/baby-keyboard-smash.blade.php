<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Baby Keyboard Smash Game!</title>
  <meta name="description" content="A keyboard smash videogame for babies. Animations such as fireworks will appear when keys are pressed.">
  <meta name="author" content="Kevin Wheeler">

  <meta property="og:image" content="https://drive.google.com/uc?id=1JyfaOiFkPqOKJ3q_f0hcU8wKZp_B9eok" />
  <meta property="og:description" content="A keyboard smash videogame for babies. Animations such as fireworks will appear when keys are pressed." />
  <meta name="google-site-verification" content="Y3-tHUYAJjAt6c7LPTxLIeDfd8liwzBzpe3uqvTJbco" />

<!--  <link rel="stylesheet" href="css/styles.css?v=1.0"> -->

</head>

<body>
<canvas id='kmw-background-canvas' style="position:fixed;touch-action: none">
  Canvas is not supported in your browser.
</canvas>
<canvas id='s' style="position:fixed;touch-action: none">
  Canvas is not supported in your browser.
</canvas>
<canvas id="canvas" style="position:fixed;touch-action: none">
  <!--<canvas id="canvas">-->
  Canvas is not supported in your browser.
</canvas>
<script>
(function() {
  Grass = function() {
    return this;
  };
  
  Grass.prototype= {
      
    
    alto_hierba: 0,    // grass height
    maxAngle:    0,    // maximum grass rotation angle (wind movement)
    angle:       0,    // construction angle. thus, every grass is different to others  
    coords:      null,  // quadric bezier curves coordinates
    color:       null,  // grass color. modified by ambient component.
    offset_control_point:   3,    // grass base width. greater values, wider at the basement.

    initialize : function(canvasWidth, canvasHeight, minHeight, maxHeight, angleMax, initialMaxAngle)  {

      // grass start position
      var sx= Math.floor( Math.random()*canvasWidth );
      var sy= canvasHeight;
      
      // quadric curve middle control point. higher values means wider grass from base to peak.
      // try offset_control_x=10 for thicker grass.
      var offset_control_x=1.5;  
      
      this.alto_hierba= minHeight+Math.random()*maxHeight;
      this.maxAngle= 10+Math.random()*angleMax;
      this.angle= Math.random()*initialMaxAngle*(Math.random()<0.5?1:-1)*Math.PI/180;

      // hand crafted value. modify offset_control_x to play with grass curvature slope.
      var csx= sx-offset_control_x ;

      // grass curvature. greater values make grass bender. 
      // try with:  
      //        var csy= sy-this.alto_hierba;  -> much more bended grass.
      //        var csy= sy-1;                 -> totally unbended grass.
      //        var csy= sy-this.alto_hierba/2;-> original. good looking grass.
      var csy= 0;
      if ( Math.random()<0.1 ) {
        csy= sy-this.alto_hierba;
      } else {
        csy= sy-this.alto_hierba/2;
      }
          
      /**
       I determined that both bezier curves that conform each grass should have
       the same middle control point to be parallel.
       You can play with psx/psy adding or removing values to slightly modify grass
       geometry.
      **/
      var psx= csx;
      // changed var psy= csy; to
      var psy= csy-offset_control_x;
          
      // the bigger offset_control_point, the wider on its basement.
      this.offset_control_point=3;
      var dx= sx+this.offset_control_point;
      var dy= sy;      
      
      this.coords= [sx,sy,csx,csy,psx,psy,dx,dy];
          
      // grass color.
      this.color= [16+Math.floor(Math.random()*32),
                   100+Math.floor(Math.random()*155),
                   16+Math.floor(Math.random()*32) ];
      
    },
    
    /**
     * paint every grass.
     * @param ctx is the canvas2drendering context
     * @param time for grass animation.
     * @param ambient parameter to dim or brighten every grass.
     * @returns nothing
     */
    paint : function(ctx,time,ambient) {

          ctx.save();
          
          // grass peak position. how much to rotate the peak.
          // less values (ie the .0005), will make as if there were a softer wind.
          var inc_punta_hierba= Math.sin(time*0.0005);
          
          // rotate the point, so grass curves are modified accordingly. If just moved horizontally, the curbe would
          // end by being unstable with undesired visuals. 
          var ang= this.angle + Math.PI/2 + inc_punta_hierba * Math.PI/180*(this.maxAngle*Math.cos(time*0.0002));
          var px= this.coords[0]+ this.offset_control_point + this.alto_hierba*Math.cos(ang);
          var py= this.coords[1]                  - this.alto_hierba*Math.sin(ang);
    
          var c= this.coords;
      
          ctx.beginPath();
          ctx.moveTo( c[0], c[1] );
          ctx.bezierCurveTo(c[0], c[1], c[2], c[3], px, py);
          ctx.bezierCurveTo(px, py, c[4], c[5], c[6], c[7]);
          ctx.closePath();
          ctx.fillStyle='rgb('+
              Math.floor(this.color[0]*ambient)+','+
              Math.floor(this.color[1]*ambient)+','+
              Math.floor(this.color[2]*ambient)+')';
          ctx.fill();

          ctx.restore();
            
    }  
  };
})();

(function tempName() {
  Garden= function() {
    return this;
  };
  
  Garden.prototype= {
    grass:      null,
    ambient:    1,
    stars:      null,
    firefly_radius:  10,
    num_fireflyes:  40,
    num_stars:    512,
    width:      0,
    height:      0,
    
    initialize : function(width, height, size)  {
      this.width= width;
      this.height= height;
      this.grass= [];
      
      for(var i=0; i<size; i++ ) {
        var g= new Grass();
        g.initialize(
            width,
            height,
            50,      // min grass height 
            height*1/3, // max grass height
            20,     // grass max initial random angle 
            40      // max random angle for animation 
            );
        this.grass.push(g);
      }
      
      this.stars= [];
      for( i=0; i<this.num_stars; i++ )  {
        this.stars.push( Math.floor( Math.random()*(width-10)+5  ) );
        this.stars.push( Math.floor( Math.random()*(height-10)+5 ) );
      }
    },
    
    paint : function(ctx, time){
      ctx.save();
        // modify stars translucency by ambient (as transitioning to day, make them dissapear).
        //ctx.globalAlpha= 1-((this.ambient-0.05)/0.25);

        ctx.globalAlpha= 1;

        // as well as making them dimmer
        //intensity= 1 - (this.ambient/2-0.05)/0.25;

        intensity= 1;
        
        // how white do you want the stars to be ??
        var c= Math.floor( 192*intensity );
        var strc= 'rgb('+c+','+c+','+c+')';
        ctx.strokeStyle=strc;
        
        // first num_fireflyes coordinates are fireflyes themshelves.
        for( var j=this.num_fireflyes*2; j<this.stars.length; j+=2 )  {
          var inc=1;
          
          // every one out of 3 stars move at 1.5 increment
          if ( j%3===0 ) {
            inc=1.5;
          } else if ( j%11===0 ) {
          // every one out of 11 stars move at 2.5 increment
            inc=2.5;
          }
          // all the others at increment 1
          this.stars[j]= (this.stars[j]+0.1*inc)%canvas.width;
          
          var y= this.stars[j+1];
          ctx.strokeRect(this.stars[j],this.stars[j+1],1,1);

        }

      ctx.globalAlpha= 1;
      
      var i;
      // draw fireflyes
        ctx.fillStyle= '#ffff00';      
        for(i=0; i<this.num_fireflyes*2; i+=2) {
          var angle= Math.PI*2*Math.sin(time*3E-4) + i*Math.PI/50;
          var radius= this.firefly_radius*Math.cos(time*3E-4);
          ctx.fillRect(
              this.stars[i] + 
              150*Math.cos(time*3E-4) * Math.sin(time*0.00001*i) +  // move horizontally with time 
              radius*Math.cos(angle),
              
              this.height*3/4 + 
              0.25*this.stars[i+1] +  
              20*Math.sin(time*3E-4) * 5* Math.cos(time*0.00001*i)+  // move vertically with time 
              radius*Math.sin(angle),
              
                3,
                3 );
        }            
      
      
      for(i=0; i<this.grass.length; i++ ) {
        this.grass[i].paint(ctx,time,this.ambient);
      }
      ctx.restore();
    }
  };
})();


    function _doit()    {
      ctx.fillStyle= gradient;
      ctx.fillRect(0,0,canvas.width,canvas.height);
      var ntime= new Date().getTime();
      var elapsed= ntime-time;
      garden.paint( ctx, elapsed );
      requestAnimationFrame(_doit);
    }

    var x = 0;

    function startRecording() {
      const chunks = []; // here we will store our recorded media chunks (Blobs)
      const stream = canvas.captureStream(); // grab our canvas MediaStream
      const rec = new MediaRecorder(stream, {
        videoBitsPerSecond : 25/*Mb*/*000/*Kb*/*000,
        mimeType : 'video/webm'
      }); // init the recorder
      // every time the recorder has new data, we will store it in our array
      rec.ondataavailable = function(e){chunks.push(e.data)};
      // only when the recorder stops, we construct a complete Blob from all the chunks
      rec.onstop = function(e){exportVid(new Blob(chunks, {type: 'video/webm'}))};
      rec.start();
      setTimeout(function(){rec.stop()}, 6000); // stop recording in x seconds
    }

    function exportVid(blob) {
      const vid = document.createElement('video');
      vid.src = URL.createObjectURL(blob);
      vid.controls = true;
      document.body.appendChild(vid);
      const a = document.createElement('a');
      a.download = 'myvid.webm';
      a.href = vid.src;
      a.textContent = 'download the video';
      document.body.appendChild(a);
    }


    /**
     * fade sky colors
     * @param time current time
     * @param last how much time to take fading colors
     * kmw: Actually all this does now is set the background gradient one time.
     * Lots of tech debt / old code left that doesn't actually do anything anymore.
     */
    function lerp( time, last ) {

      let backgroundCanvas= document.getElementById('kmw-background-canvas');

      backgroundCanvas.width  = window.innerWidth;
      backgroundCanvas.height = window.innerHeight;
      let backgroundCtx = backgroundCanvas.getContext('2d', {alpha: false});

      gradient= backgroundCtx.createLinearGradient(0,0,0,backgroundCanvas.height);
      
      var i0= lerpindex%colors.length;
      var i1= (lerpindex+1)%colors.length;
      
      for( var i=0; i<4; i++ )  {
        var rgb='rgb(';
        for( var j=0; j<3; j++ ) {
          rgb+= Math.floor( (colors[i1][i*3+j]-colors[i0][i*3+j])*time/last + colors[i0][i*3+j]);
          if ( j<2 ) rgb+=',';
        }
        rgb+=')';
        gradient.addColorStop( i/3, rgb );
      }
      
      garden.ambient= (ambients[i1]-ambients[i0])*time/last + ambients[i0];
    }

    
var lerpTime= 10000;    // time taken to fade sky colors
var nextLerpTime= 15000;  // after fading, how much time to wait to fade colors again.

//var interval= null;
var canvas= null;
var ctx= null;
var garden= null;

var gradient;
var time;

    function init(images) {
      
        canvas= document.getElementById('s');
        ctx= canvas.getContext('2d');
        canvas.width= window.innerWidth;
        canvas.height=window.innerHeight;

        garden= new Garden();
        garden.initialize(canvas.width, canvas.height, 300);
        
        lerp(0,2000);
        
        time= new Date().getTime();
//        interval = setInterval(_doit, 30);
        requestAnimationFrame(_doit);
//        startRecording();
    }

    /* this used to be an array of multiple arrays, but I'm only using one sub-array/color scheme now */
    colors= [
            
          [ 0x00, 0x00, 0x00,
            0x00, 0x2f, 0x7f,
            0x00, 0x28, 0x50,
            0x00, 0x1f, 0x3f ],
             ];

    // This used to be an array of multiple values, but I'm only using one color scheme/value now.
    ambients= [ 1 ];
    
    // start with this sky index.
    lerpindex= 0;
    
window.addEventListener(
    'load',
    init(null),
    false);


</script>

<script>
  // when animating on canvas, it is best to use requestAnimationFrame instead of setTimeout or setInterval
  // not supported in all browsers though and sometimes needs a prefix, so we need a shim
  window.requestAnimFrame = ( function() {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function( callback ) {
          window.setTimeout( callback, 1000 / 60 );
        };
  })();

  // now we will setup our basic variables for the demo
  var canvas = document.getElementById( 'canvas' ),
      ctx2 = canvas.getContext( '2d' ),
  // full screen dimensions
      cw = window.innerWidth,
      ch = window.innerHeight,
  // particle collection
      particles = [],
  // starting hue
      hue = 120,
  // this will time the auto launches of fireworks, one launch per 80 loop ticks
      timerTotal = 80,
      timerTick = 0;

  // set canvas dimensions
  canvas.width = cw;
  canvas.height = ch;

  // now we are going to setup our function placeholders for the entire demo

  // get a random number within a range
  function random( min, max ) {
    return Math.random() * ( max - min ) + min;
  }

  // calculate the distance between two points
  function calculateDistance( p1x, p1y, p2x, p2y ) {
    var xDistance = p1x - p2x,
        yDistance = p1y - p2y;
    return Math.sqrt( Math.pow( xDistance, 2 ) + Math.pow( yDistance, 2 ) );
  }

  // create particle
  function Particle( x, y ) {
    this.x = x;
    this.y = y;
    // track the past coordinates of each particle to create a trail effect, increase the coordinate count to create more prominent trails
    this.coordinates = [];
    this.coordinateCount = 5;
    while( this.coordinateCount-- ) {
      this.coordinates.push( [ this.x, this.y ] );
    }
    // set a random angle in all possible directions, in radians
    this.angle = random( 0, Math.PI * 2 );
    this.speed = random( 1, 10 );
    // friction will slow the particle down
    this.friction = 0.95;
    // gravity will be applied and pull the particle down
    this.gravity = 1;
    // set the hue to a random number +-50 of the overall hue variable
    this.hue = random( hue - 50, hue + 50 );
    this.brightness = random( 50, 80 );
    this.alpha = 1;
    // set how fast the particle fades out
    this.decay = random( 0.015, 0.03 );
  }

  // update particle
  Particle.prototype.update = function( index ) {
    // remove last item in coordinates array
    this.coordinates.pop();
    // add current coordinates to the start of the array
    this.coordinates.unshift( [ this.x, this.y ] );
    // slow down the particle
    this.speed *= this.friction;
    // apply velocity
    this.x += Math.cos( this.angle ) * this.speed;
    this.y += Math.sin( this.angle ) * this.speed + this.gravity;
    // fade out the particle
    this.alpha -= this.decay;

    // remove the particle once the alpha is low enough, based on the passed in index
    if( this.alpha <= this.decay ) {
      particles.splice( index, 1 );
    }
  }

  // draw particle
  Particle.prototype.draw = function() {
    ctx2.beginPath();
    // move to the last tracked coordinates in the set, then draw a line to the current x and y
    ctx2.moveTo( this.coordinates[ this.coordinates.length - 1 ][ 0 ], this.coordinates[ this.coordinates.length - 1 ][ 1 ] );
    ctx2.lineTo( this.x, this.y );
    ctx2.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
    ctx2.stroke();
  }

  // create particle group/explosion

  function createParticles( x, y ) {
    // increase the particle count for a bigger explosion, beware of the canvas performance hit with the increased particles though
    var particleCount = 30;
    while( particleCount-- ) {
      particles.push( new Particle( x, y ) );
    }

    var snd = new Audio("/storage/firework-sound.mp3"); // buffers automatically when created
    snd.play();
  }

  // main demo loop
  function loop() {
    // create random color
    hue= random(0, 360 );

    // normally, clearRect() would be used to clear the canvas
    // we want to create a trailing effect though
    // setting the composite operation to destination-out will allow us to clear the canvas at a specific opacity, rather than wiping it entirely
//    ctx2.globalCompositeOperation = 'destination-out';
//    ctx2.globalCompositeOperation = 'source-over';
    // decrease the alpha property to create more prominent trails
//    ctx2.fillStyle = 'rgba(0, 0, 0, .5)';
//    ctx2.fillRect( 0, 0, cw, ch );
    ctx2.clearRect( 0, 0, cw, ch );
    // change the composite operation back to our main mode
    // lighter creates bright highlight points as the fireworks and particles overlap each other
    ctx2.globalCompositeOperation = 'lighter';
//    ctx2.globalCompositeOperation = 'source-over';

    // draw particles
    ctx2.lineWidth = 20;
    ctx2.lineCap = "round";
    // loop over each particle, draw it, update it
    var i = particles.length;
    while( i-- ) {
      particles[ i ].draw();
      particles[ i ].update( i );
    }

    // loop again
    requestAnimFrame( loop );
  }

  // mouse event binding
  // update the mouse coordinates on mousemove
//  canvas.addEventListener( 'mousemove', function( e ) {
//    mx = e.pageX - canvas.offsetLeft;
//    my = e.pageY - canvas.offsetTop;
//  });

  // toggle mousedown state and prevent canvas from being selected
//  canvas.addEventListener( 'mousedown', function( e ) {
//    e.preventDefault();
//    mousedown = true;
//  });

  document.addEventListener("keydown", function(){
    createParticles(Math.random()*cw,Math.random()*.5*ch);
//    fireworks.push( new Firework( cw / 2, ch, random( 0, cw ), random( 0, ch / 2 ) ) )
  });

  document.addEventListener("touchstart", function(e) {
    timeOfLastFirework = Date.now();
    for(let i=0; i < e.touches.length; ++i) {
      let touch = e.touches.item(i);
      createParticles(touch.clientX, touch.clientY);
    }
  });


  let timeOfLastFirework = 0;
  // side effect: conditionally updates the timeOfLastFirework to be Date.now().
  let enoughTimeSinceLastFirework = function() {
    let minimumTimeBetweenFireworks = 100;
    if (Date.now() - timeOfLastFirework < minimumTimeBetweenFireworks) {
      return false;
    } else {
      timeOfLastFirework = Date.now()
      return true;
    }
  }

  document.addEventListener("touchmove", function(e) {
    if (!enoughTimeSinceLastFirework()) {
      return;
    }

    for(let i=0; i < e.touches.length; ++i) {
      let touch = e.touches.item(i);
      createParticles(touch.clientX, touch.clientY);
    }
  });

  document.addEventListener("mousedown", function(e) {
    createParticles(e.clientX, e.clientY);
  });


  // TODO add mouse "drag" support (really just mouse movement when clicked)

  window.addEventListener(
      'load',
      loop,
      false);

//  window.addEventListener(
//      'resize',
//      resizeCanvases,
//      false);
//
//  let resizeCanvases = function(){
//    canvas1= document.getElementById('s');
//    canvas2= document.getElementById('canvase');
//  }



</script>
</body>