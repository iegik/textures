<html style="background: #fff url('-no-background-.png');padding: 1%;">
<style>
[type="color"] {
  width: 30px;
  padding: 0;
  height: 1.5em;
  border: 0;
  vertical-align: middle;
}
input, select {
  width: 150px;
}
label {
  min-width: 140px;
  display: inline-block;
  text-align: right;
}
</style>

<div id="html" style="height:90%;width:90%;background-color: white">
  <div id="body" style="height:90%;width:90%;background-color: transparent; margin-top:5%;margin-left:5%;position:absolute">
  
  <form style="margin:0 auto;width:360px; background-color: rgba(128,128,128,.5)">
    <fieldset>
      <legend>Html</legend>
      <p>
        <label for="html-background-color">background-color:</label>
        <input id="html-background-color" onchange="(function(d,s){d.getElementById('html').style.backgroundColor=s;console.log('background-color: '+s+';')})(document,this.value)" placeholder="transparent" value="white"/>
        <input type="color" onchange="(function(d,s){d.getElementById('html').style.backgroundColor=s;d.getElementById('html-background-color').value=s;console.log('background-color: '+s+';')})(document,this.value)"/>
      </p>
      <p>
        <label for="background-image">background-image:</label>
        <select id="background-image" onchange="(function(d,s){d.getElementById('html').style.backgroundImage='url(\''+s+'\')';console.log('background-image: url(\''+s+'\');')})(document,this.value)">
          <option value="none">none</option>
<<<<<<< master:index.php
        <?php foreach (scandir(dirname(__FILE__)) as $f){
          if(preg_match('/(jpg|png|gif)/',$f))
            printf('<option value="%s">%s</option>',$f,substr($f,0,-4));
        }?>
        </select>
=======
        <option value="-no-background-.png">-no-background-</option><option value="-no-background-1.png">-no-background-1</option><option value="-no-background-1.png.b64">-no-background-1.png</option><option value="01.png">01</option><option value="1cm.png">1cm</option><option value="8x6gray.png">8x6gray</option><option value="March2011-Wallpaper-LRG.jpg">March2011-Wallpaper-LRG</option><option value="Pink Plarform.gif">Pink Plarform</option><option value="Sexy_Blond_by_m4riOS-32x18x32.gif">Sexy_Blond_by_m4riOS-32x18x32</option><option value="Sexy_Blond_by_m4riOS_128.gif">Sexy_Blond_by_m4riOS_128</option><option value="always_grey.png">always_grey</option><option value="carbon_fibre_v2.png">carbon_fibre_v2</option><option value="carbone.png">carbone</option><option value="diod.png">diod</option><option value="footer_bg_repeat_top_trans.png">footer_bg_repeat_top_trans</option><option value="illico.png">illico</option><option value="innerpage_background_image.png">innerpage_background_image</option><option value="leafs-b.png">leafs-b</option><option value="leafs-gs.png">leafs-gs</option><option value="leafs-w.png">leafs-w</option><option value="leafs-w.png.b64">leafs-w.png</option><option value="light-corner-t.png">light-corner-t</option><option value="light-corner-tr.png">light-corner-tr</option><option value="lined_paper.png">lined_paper</option><option value="lined_paper.png.b64">lined_paper.png</option><option value="lined_paper_2X.png">lined_paper_2X</option><option value="lined_paper_2X.png.b64">lined_paper_2X.png</option><option value="none.gif">none</option><option value="path3017.png">path3017</option><option value="path3017.png.b64">path3017.png</option><option value="path3021.png">path3021</option><option value="path3021.png.b64">path3021.png</option><option value="roses.png">roses</option><option value="smfng8x6-tr.png">smfng8x6-tr</option><option value="starmat.png">starmat</option><option value="tr.gif">tr</option>        </select>
>>>>>>> local:index.html
        <input type="color" onchange="(function(d,s){d.getElementById('html').style.backgroundImage='-webkit-gradient(linear,0 0,0 100%,from('+d.getElementById('html-background-color').value+'),to('+s+'))';console.log(d.getElementById('html').style,'background-image: -webkit-gradient(linear,0 0,0 100%,from('+d.getElementById('html-background-color').value+'),to('+s+'));')})(document,this.value)"/>
      </p>
      <p>
        <label for="background-repeat">background-repeat:</label>
        <select id="background-repeat" onchange="(function(d,s){d.getElementById('html').style.backgroundRepeat=s;console.log(d.getElementById('html').style.backgroundRepeat,'background-repeat: '+s+';')})(document,this.value)">
          <option value="repeat">repeat</option>
          <option value="repeat-x">repeat-x</option>
          <option value="repeat-y">repeat-y</option>
          <option value="no-repeat">no-repeat</option>
        </select>
      </p>  
      <p>
        <label for="background-position">background-position:</label>
        <input id="background-position" onchange="(function(d,s){d.getElementById('html').style.backgroundPosition=s;console.log(d.getElementById('html').style,'background-position: '+s+';')})(document,this.value)" placeholder="50% 50%"/>
      </p>
      <p>
        <label for="background-size">background-size:</label>
        <input id="background-size" onchange="(function(d,s){d.getElementById('html').style.backgroundSize=s;console.log('background-size: '+s+';')})(document,this.checked?'100%':'auto')" type="checkbox"/>
      </p>
    </fieldset>
    
    <fieldset>
      <legend>Body</legend>
      <p>
        <label for="background-image">background-image:</label>
        <select id="background-image" onchange="(function(d,s){d.getElementById('body').style.backgroundImage='url('+s+')';console.log('background-image: url(\''+s+'\');')})(document,this.value)">
          <option value="none">none</option>
<<<<<<< master:index.php
        <?php foreach (scandir(dirname(__FILE__)) as $f){
          if(preg_match('/(jpg|png|gif)/',$f))
            printf('<option value="%s">%s</option>',$f,substr($f,0,-4));
        }?>
        </select>
=======
        <option value="-no-background-.png">-no-background-</option><option value="-no-background-1.png">-no-background-1</option><option value="-no-background-1.png.b64">-no-background-1.png</option><option value="01.png">01</option><option value="1cm.png">1cm</option><option value="8x6gray.png">8x6gray</option><option value="March2011-Wallpaper-LRG.jpg">March2011-Wallpaper-LRG</option><option value="Pink Plarform.gif">Pink Plarform</option><option value="Sexy_Blond_by_m4riOS-32x18x32.gif">Sexy_Blond_by_m4riOS-32x18x32</option><option value="Sexy_Blond_by_m4riOS_128.gif">Sexy_Blond_by_m4riOS_128</option><option value="always_grey.png">always_grey</option><option value="carbon_fibre_v2.png">carbon_fibre_v2</option><option value="carbone.png">carbone</option><option value="diod.png">diod</option><option value="footer_bg_repeat_top_trans.png">footer_bg_repeat_top_trans</option><option value="illico.png">illico</option><option value="innerpage_background_image.png">innerpage_background_image</option><option value="leafs-b.png">leafs-b</option><option value="leafs-gs.png">leafs-gs</option><option value="leafs-w.png">leafs-w</option><option value="leafs-w.png.b64">leafs-w.png</option><option value="light-corner-t.png">light-corner-t</option><option value="light-corner-tr.png">light-corner-tr</option><option value="lined_paper.png">lined_paper</option><option value="lined_paper.png.b64">lined_paper.png</option><option value="lined_paper_2X.png">lined_paper_2X</option><option value="lined_paper_2X.png.b64">lined_paper_2X.png</option><option value="none.gif">none</option><option value="path3017.png">path3017</option><option value="path3017.png.b64">path3017.png</option><option value="path3021.png">path3021</option><option value="path3021.png.b64">path3021.png</option><option value="roses.png">roses</option><option value="smfng8x6-tr.png">smfng8x6-tr</option><option value="starmat.png">starmat</option><option value="tr.gif">tr</option>        </select>
>>>>>>> local:index.html
        <input type="color" onchange="(function(d,s){d.getElementById('body').style.backgroundImage='-webkit-gradient(linear,0 0,0 100%,from('+d.getElementById('body-background-color').value+'),to('+s+'))';console.log(d.getElementById('body').style,'background-image: -webkit-gradient(linear,0 0,0 100%,from('+d.getElementById('body-background-color').value+'),to('+s+'));')})(document,this.value)"/>
      </p>
      <p>
        <label for="background-repeat">background-repeat:</label>
        <select id="background-repeat" onchange="(function(d,s){d.getElementById('body').style.backgroundRepeat=s;console.log(d.getElementById('body').style.backgroundRepeat,'background-repeat: '+s+';')})(document,this.value)">
          <option value="repeat">repeat</option>
          <option value="repeat-x">repeat-x</option>
          <option value="repeat-y">repeat-y</option>
          <option value="no-repeat">no-repeat</option>
        </select>
      </p>  
      <p>
        <label for="color">background-color:</label>
        <input id="body-background-color" onchange="(function(d,s){d.getElementById('body').style.backgroundColor=s;console.log('background-color: '+s+';')})(document,this.value)" placeholder="transparent" value="transparent"/>
        <input type="color" onchange="(function(d,s){d.getElementById('body').style.backgroundColor=s;d.getElementById('body-background-color').value=s;console.log('background-color: '+s+';')})(document,this.value)"/>
      </p>
      <p>
        <label for="background-position">background-position:</label>
        <input id="background-position" onchange="(function(d,s){d.getElementById('body').style.backgroundPosition=s;console.log('background-position: '+s+';')})(document,this.value)" placeholder="50% 50%"/>
      </p>
      <p>
        <label for="background-size">background-size:</label>
        <input id="background-size" onchange="(function(d,s){d.getElementById('body').style.backgroundSize=s;console.log('background-size: '+s+';')})(document,this.checked?'100%':'auto')" type="checkbox"/>
      </p>
    </fieldset>
  </form>
  </div>
</div>
</html>
