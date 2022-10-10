<!DOCTYPE html>
<html>
  <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  <script src="https://rawgit.com/mayognaise/aframe-gif-shader/master/dist/aframe-gif-shader.min.js"></script> 
  <body>
    <a-scene>
      <a-marker type='pattern' url='pattern-blue.patt'>
        <a-image src="krab.png"
          position= "0 1 0"
          scale= "1 1 1"
          rotation="2 2 2" animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>
