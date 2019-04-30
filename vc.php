<html itemscope itemtype="http://schema.org/Product" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
    </head>
    <body>
        <div id="container" style="width:100%; height:100%; border:3px solid navy" align="center"></div>
        <script src="https://meet.jit.si/external_api.js"></script> 
        <script>
            var domain = "meet.jit.si";
            var options = {
                roomName: "DigitalMedia",
                width: "100%",
                height: "100%",
                parentNode: document.querySelector('#container'),
                interfaceConfigOverwrite: {
                    //filmStripOnly: true
                   
                }
                
            }
            
           var api = new JitsiMeetExternalAPI(domain, options);
            api.executeCommand('displayName', "Mario");
            
        </script>

    </body>
</html>
