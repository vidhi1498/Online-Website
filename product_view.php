<!-- Demo page craeted by https://github.com/petr-goca -->
<html>
<head>
<title>timepass</title>
<style>
@import url(https://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic);
body,
html {
  margin: 0;
  font-family: muli;
  height: 100%;
  padding: 0;
  overflow-x:hidden;
}

h1,
h2,
h3 {
  margin: 0;
}

.container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  background: #999;
}

.window {
  background: #fff;
  width: 470px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  min-height: 450px;
  position: relative;
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.2);
}
.options {
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  margin-top:25px;
  -webkit-box-pack:justify;
  -webkit-justify-content:space-between;
      -ms-flex-pack:justify;
          justify-content:space-between;
}
.main-content {
  padding:50px 46px 25px 20px;
  box-sizing: border-box;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  color: #222;
  width: 100%;
  height: 100%;
  -webkit-flex-flow: column;
      -ms-flex-flow: column;
          flex-flow: column;
}

h1 {
  letter-spacing: 0px;
  letter-spacing: .02rem;
  font-size: 48px;
  font-size: 3rem;
}

h3 {
  color: #666;
  font-size: 19px;
  font-size: 1.2rem;
}

.description {
  margin-top: 20px;
  width: 100%;
}

.highlight-window {
  height: 550px;
  width: 400px;
  background: #ccc;
  background: url('https://dl.dropboxusercontent.com/s/rohie91jbw2a9ca/T60751001_2V5_back.jpg');
  background-size: cover;
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.2);
  z-index: 10;
  position:relative;
  background-position:center top;
}

.color {
  height: 30px;
  cursor:pointer;
  width: 30px;
  background: #eee;
  border: 1px solid #eee;
  position:relative;
}
.highlight-overlay {
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  opacity:0;
  filter: alpha(opacity=0);
 background:url('https://dl.dropboxusercontent.com/s/anvrsmhpcs6fl6c/T60751001_050_back.jpg?dl=0');
  background-size:cover;
  -webkit-transition:opacity .4s ease;
          transition:opacity .4s ease;
  background-position:center top;
}
.background-element {
  background: #457;
  position: absolute;
  width: 120%;
  height: 400px;
  left: -50px;
  top: -80px;
  -webkit-transform: rotate(-5deg);
      -ms-transform: rotate(-5deg);
          transform: rotate(-5deg);
  -webkit-transition:background .6s ease;
          transition:background .6s ease;
}
.color.overlay {
  position:absolute;
  z-index:10;
  background:transparent;
  top:-1px;
  left:-1px;
  -webkit-transform:translateX(45px);
      -ms-transform:translateX(45px);
          transform:translateX(45px);
  border:2px solid #fff;
  outline:2px solid #ccc;
  -webkit-transition:-webkit-transform .3s ease;
          transition:transform .3s ease;
}
.color-a {
  background: #333;
  margin-right:14px;
}

.color-b {
  background: #457;

}

.color-picker {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 77px;
  margin-top:5px;
  position:relative;
}
a {
  text-decoration:none;
}
a:hover {
  text-decoration:underline;
  color:#666;
}
button {
  background:#333;
  border:none;
  font-weight:400;
  height:40px;
  margin-top:auto;
  margin-bottom:auto;
  padding-left:25px;
  padding-right:25px;
  box-sizing:border-box;
  color:#fff;
  cursor:pointer;
  -webkit-transition:all .3s ease;
          transition:all .3s ease;
}
button:hover {
  background:#555;
  -webkit-transition:all .3s ease;
          transition:all .3s ease;
}
.divider {
  width:80%;
  height:1px;
  background:#ddd;
  margin-top:20px;
  margin-bottom:20px;
  margin-left:auto;
  margin-right:auto;
}
.color-options {
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:50%;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
}
.size-picker {
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
}
.small {
  font-size: 11px;
  font-size:.7rem;
  color:#999;
  margin-top:10px;
}
.align-right {
  -webkit-align-self:flex-end;
      -ms-flex-item-align:end;
          align-self:flex-end;
}
.size-desc {
  -webkit-align-self:flex-end;
      -ms-flex-item-align:end;
          align-self:flex-end;
}

.purchase-info {
  -webkit-box-pack:justify;
  -webkit-justify-content:space-between;
      -ms-flex-pack:justify;
          justify-content:space-between;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
}
.price {
  font-size: 40px;
  font-size:2.5rem;
}


.selection {
  background:#fff;
}

.range-picker {
  font-size: 16px;
  font-size:1rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  margin-top:5px;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  line-height:.9em;
}
.range-picker div {
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  border-right:1px solid #bbb;
  border-top:1px solid #bbb;
  border-bottom:1px solid #bbb;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  color:#bbb;
  width:30px;
  box-sizing:border-box;
  cursor:pointer;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  height:30px;
  -webkit-transition:background .5s ease;
          transition:background .5s ease;
}
.highlight-window.mobile {
  display:none;
}
.range-picker .active:hover {
  background:#fff;
}
.range-picker .active {
  -webkit-transform:scale(1.2);
      -ms-transform:scale(1.2);
          transform:scale(1.2);
  background:#fff;
  margin-right:3px;
  margin-left:2px;
  color:#333;
  border:1px solid #666;
  z-index:1;
}
.check {
  position:absolute;
  right:0px;
  left:0px;
  margin-left:auto;
  margin-right:auto;
  background:transparent;
  width:0px;
  bottom:-3px;
  border-left:10px solid transparent;
  border-bottom:10px solid #ccc;
  border-right:10px solid transparent;
  height:0px;
}
.range-picker div:hover {
  background:#eee;
  -webkit-transition:background .2s;
          transition:background .2s;
}
.range-picker div:first-child {
  border-left:1px solid #bbb;
}
.range-picker div.active:first-child {
  border-left:1px solid #333;
}


@media (max-width: 850px) {
  body {
    background:#fff;
    overflow:auto;
  }
  h1 {
    font-size:2rem;
  }
  h3,h2 {
    font-size:1rem;
  }
  .container {
    height:auto;
    background:#fff;
    overflow:auto;
  }
  .background-element {
    display:none;
  }
  .main-content {
    overflow:auto;
    height:auto;
    padding-right:25px;
  }
  .options {
    -webkit-flex-flow:column;
        -ms-flex-flow:column;
            flex-flow:column;
  }
  .highlight-window {
    position:fixed;
    left:0;
    height:100%;
    width:50%;
  }
  .window {
    overflow:auto;
    width:50%;
    height:auto;
    position:absolute;
    box-shadow:none;
  }
  .price {
    margin-bottom:15px;
  }
  .button {
    width:100%;
  }
  .color-options {
    margin-bottom:15px;
  }
  .align-right {
    -webkit-align-self:flex-start;
        -ms-flex-item-align:start;
            align-self:flex-start;
  }
  .purchase-info {
    -webkit-flex-flow:column;
        -ms-flex-flow:column;
            flex-flow:column;
  }
}

@media (max-width: 550px) {
  .highlight-window {
    display:none;
  }
  body {
    overflow:auto;
    height:auto;
  }
  .highlight-window.mobile {
    position:relative;
    display:block;
    height:500px;
    box-shadow:none;
    border:1px solid #ccc;
    margin-top:15px;
    width:100%;
  }
  .container {
    overflow:auto;
  }
  .window {
    width:100%;
    position:relative;
    height:100%;
    overflow:auto;
  }
}
</style>
</head>
<body><div class='container'>
  <div class='background-element' id='background-element'>
  </div>
  <div class='highlight-window' id='product-img'><div class='highlight-overlay' id='highlight-overlay'></div></div>

  <div class='description' id='description'>
  </div>
  <div class='window'>

    <div class='main-content'>
     <div class='options'>
        <div class='color-options'>
          Color:
      <div class='color-picker'>
        <div class='color overlay' id='color-overlay'><div class='check'></div></div>
        <div class='color color-a' id='color-a'></div>
        <div class='color color-b' id='color-b'></div>
      </div>
                  <span class='small' style='color:#457'>COLOR: <span id='color-name'>BLUES / 2V5</span></span>
        </div>
        <div class='divider'></div>

          <div class='purchase-info'>
      <div class='price' id='price'> </div>
    <?php
     $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p id="discription"><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p id="price"><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';

             if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

  $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';

 ?>
     
            <button>ADD TO CART</button>
    </div>
    </div>
  </div>
</div>
<script>
document.getElementById('range-picker').addEventListener('click', function(e) {
  var sizeList = document.getElementById('range-picker').children;
  for (var i = 0; i <= sizeList.length - 1; i++) {
    console.log(sizeList[i].classList);
    if (sizeList[i].classList.contains('active')) {
      sizeList[i].classList.remove('active');
    }
  }
  e.target.classList.add('active');
})

document.getElementById('color-a').addEventListener('click', function() {
  document.getElementById('color-overlay').style.transform = 'translateX(-0.5px)';
  document.getElementById('background-element').style.backgroundColor = '#333';
  document.getElementById('highlight-overlay').style.opacity = '1';
  document.getElementById('highlight-overlay-mobile').style.opacity = '1';
  document.getElementById('color-name').innerHTML = "BLACK / 050";
  document.getElementById('color-name').style.color = '#333'

})
document.getElementById('color-b').addEventListener('click', function() {
  document.getElementById('color-overlay').style.transform = 'translateX(45px)';
  document.getElementById('background-element').style.backgroundColor = '#457';
  document.getElementById('highlight-overlay').style.opacity = '0';
  document.getElementById('highlight-overlay-mobile').style.opacity = '0';
  document.getElementById('color-name').innerHTML = "BLUES / 2V5";
  document.getElementById('color-name').style.color = '#457'
})
</script>
</body>
</html>