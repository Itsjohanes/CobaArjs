<!DOCTYPE html>
<html>
  <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  <script src="https://rawgit.com/mayognaise/aframe-gif-shader/master/dist/aframe-gif-shader.min.js"></script> 
  <body>
    <a-scene embedded arjs>
      <a-marker type='pattern' url='pattern-173941091_835664203961409_5789995235306138562_n (1).patt'>
        <a-image src="blue.png"
          position= "0 1 0"
          scale= "1 1 1"
          rotation="0 2 0" animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-marker type='pattern' url='sepatu.patt'>
        <a-image src="klipartz.com.png"
          position= "0 1 0"
          scale= "1.5 1.5 1.5"
          rotation="3 3 3" animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-marker type='pattern' url='yellowboots.patt'>
        <a-image src="duck.png"
          position= "0 1 0"
          scale= "1 1 1"
          rotation="3 3 3 " animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-marker type='pattern' url='pattern-174280781_2056937117782010_3230409652489401640_n.patt'>
        <a-image src="greendino.png"
          position= "0 1 0"
          scale= "1 1 1"
          rotation="3 3 3" animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-marker type='pattern' url='pattern-174368396_460947292023688_6554398429483939075_n.patt'>
        <a-image src="krab.png"
          position= "0 1 0"
          scale= "1 1 1"
          rotation="2 2 2" animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-marker type='pattern' url='pattern-174324655_3838406072920098_6987965916776405029_n.patt'>
        <a-image src="butterfly.png"
          position= "0 1 0"
          scale= "1 1 1"
          rotation="3 3 3" animation="property: rotation; to: 0 360 0; loop: true; dur: 7000"
        />
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>
