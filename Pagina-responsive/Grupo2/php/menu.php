<style>
/* Clearfix */
.clear:before, .clear:after {
    content: " ";
    display: table;
}

.clear:after {
    clear: both;
}

.clear {
    *zoom: 1;
}

a#pull {
    display: none;
}
nav {
    height: 80px;
    width: 100%;
    position: relative;
    border-bottom: solid 1px #DDD;
}

nav ul {
    padding: 0;
    margin: 0 auto;
    width: 600px;
    height: 40px;
}

nav li {
    display: inline;
    float: left;
}

nav a {
    color: #FFF;
    display: inline-block;
    width: 100px;
    text-align: center;
    line-height: 40px;
}

nav li a {
    border-right: 1px solid #576979;
}

nav li:last-child a {
    border-right: 0;
}

nav a:hover, nav a:active {
    background-color: #333;
}
@media only screen and (max-width : 600px) {
    nav {
        border-bottom: 0;
        height: auto;
    }

    nav ul {
        display: none;
        height: auto;
        width: 100%;
    }

    nav li {
        width: 100%;
        float: left;
        position: relative;
    }

    nav a {
        text-align: left;
        width: 100%;
        text-indent: 25px;
    }

    nav a#pull {
        display: block;
        width: 100%;
        position: relative;
    }

    nav a#pull:after {
        content:"";
        background: url('nav-icon.png') no-repeat;
        width: 30px;
        height: 30px;
        display: inline-block;
        position: absolute;
        right: 15px;
        top: 10px;
    }
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(function() {
    var pull = $('#pull');
    menu = $('nav ul');
    menuHeight = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});
</script>

<nav>
    <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><i class="material-icons"></i>Alejandra_Narvaez</a>
      <a id="pull" href="#!" class="brand-logo"><i class="material-icons"></i>Alejandra_Narvaez</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="ambulancia.php"><i class="icon-ambulancia">Ambulancia</i></a></li>
        <li><a href="manzana.php"><i class="icon-manzana">Manzana</i></a></li>
        <li><a href="cucaracha.php"><i class="icon-cucaracha">Cucaracha</i></a></li>
        <li><a href="manzana.php"><i class="icon-manzana">manzana2</i></a></li>
      </ul>
    </div>
  </nav>
