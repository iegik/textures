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
        <?php foreach (scandir(dirname(__FILE__)) as $f){
          if(preg_match('/(jpg|png|gif)/',$f))
            printf('<option value="%s">%s</option>',$f,substr($f,0,-4));
        }?>
        </select>
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
        <?php foreach (scandir(dirname(__FILE__)) as $f){
          if(preg_match('/(jpg|png|gif)/',$f))
            printf('<option value="%s">%s</option>',$f,substr($f,0,-4));
        }?>
        </select>
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
