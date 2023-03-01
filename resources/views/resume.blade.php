<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kevin Wheeler</title>
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])

        @if($devEnvironment)
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
        {{-- <script src="https://documentservices.adobe.com/view-sdk/viewer.js" defer></script>
        <script type="text/javascript" defer>
           document.addEventListener("adobe_dc_view_sdk.ready", function()
           {
               var adobeDCView = new AdobeDC.View({clientId: "34e74ab26db84d84936a007c215330e8", divId: "adobe-dc-view"});
               adobeDCView.previewFile(
              {
                 content: {location: {url: "https://documentservices.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf"}},
                 metaData: {fileName: "Bodea Brochure.pdf"}
              });
           });
        </script> --}}
        
<script defer src="https://documentservices.adobe.com/view-sdk/viewer.js"></script>
<script defer type="text/javascript">
	document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
		var adobeDCView = new AdobeDC.View({clientId: "34e74ab26db84d84936a007c215330e8", divId: "adobe-dc-view"});
		adobeDCView.previewFile({
			// content:{location: {url: "https://www.kevinwheeler.net/storage/kevin-wheeler-resume.pdf"}},
			content:{location: {url: "/storage/kevin-wheeler-resume.pdf"}},
			metaData:{fileName: "Bodea Brochure.pdf"}
		}, {embedMode: "IN_LINE"});
	});
</script>
    </head>
    <body >
        <div id="app"></div>
    </body>
</html>
