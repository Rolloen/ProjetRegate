@extends('header')

@section('title', 'Camera')

@section('content')


<div class="row text-center">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Camera en direct :</div>
      <div class="panel-body">
        <script type="text/javascript">
          // Set the BaseURL to the URL of your camera
          var BaseURL = "http://10.40.74.47/";

          // DisplayWidth & DisplayHeight specifies the displayed width & height of the image.
          // You may change these numbers, the effect will be a stretched or a shrunk image
          var DisplayWidth = "40%";
          var DisplayHeight = "50%";

          // This is the path to the image generating file inside the camera itself
          var File = "axis-cgi/mjpg/video.cgi?resolution=640x480&clock=1&date=0";
          // No changes required below this point
          var output = "";
          if ((navigator.appName == "Microsoft Internet Explorer") &&
            (navigator.platform != "MacPPC") && (navigator.platform != "Mac68k")) {
            // If Internet Explorer under Windows then use ActiveX
            output = '<OBJECT ID="Player" width='
            output += DisplayWidth;
            output += ' height=';
            output += DisplayHeight;
            output += ' CLASSID="CLSID:DE625294-70E6-45ED-B895-CFFA13AEB044" ';
            output += 'CODEBASE="';
            output += BaseURL;
            output += 'activex/AMC.cab#version=3,32,19,0">';
            output += '<PARAM NAME="MediaURL" VALUE="';
            output += BaseURL;
            output += File + '">';
            output += '<param name="MediaType" value="mjpeg-unicast">';
            output += '<param name="ShowStatusBar" value="0">';
            output += '<param name="ShowToolbar" value="0">';
            output += '<param name="AutoStart" value="1">';
            output += '<param name="StretchToFit" value="1"></OBJECT>';
          } else {
            // If not IE for Windows use the browser itself to display
            theDate = new Date();
            output = '<IMG SRC="';
            output += BaseURL;
            output += File;
            output += '&dummy=' + theDate.getTime().toString(10);
            output += '" HEIGHT="';
            output += DisplayHeight;
            output += '" WIDTH="';
            output += DisplayWidth;
            output += '" ALT="Camera Image">';
          }
          document.write(output);
          document.Player.ToolbarConfiguration = "play,+snapshot,+fullscreen"
          // document.Player.UIMode = "MDConfig";
          // document.Player.MotionConfigURL = "/axis-cgi/operator/param.cgi?ImageSource=0"
          // document.Player.MotionDataURL = "/axis-cgi/motion/motiondata.cgi";
        </SCRIPT>

      </div>
    </div>
  </div>
</div>
@endsection

</body>

</html>
