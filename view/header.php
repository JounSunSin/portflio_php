<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="title" content="JongSun PortFlio">
        <meta name="description" content="web, moblie, web site, front end, Developer, web publishing">
        <meta name="keywords" content="web, moblie, web site, front end, Developer, web publishing">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta http-equiv="content-type" content="text/html; charset=euc-kr" />

        <!-- css / script -->
        <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
        <script defer src="js/common.js" type="text/javascript"></script>

        <!-- plugin / font cdn -->
        <link href="https://fonts.googleapis.com/css2?family=Iceland&family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">
        <script defer src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

        <title>JongSun PortFlio</title>
</head>

<script type="text/javascript">
    $(document).ready(function() {
        window.addEventListener('scroll', () => {
            this.scroll_num = window.scrollY;

            if (this.scroll_num >= 650) {
                stateAni("stop");
            } else if (this.scroll_num < 500) {
                stateAni("run");
            }
        }); 

        backCover();
        showSkill();
        typingMsg();
    });
</script>

<body>
    <header>
        <input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation"/>
        <label for="main-navigation-toggle" onclick="stateAni('checked')">
            <span></span>
        </label>

        <nav id="main-navigation" class="nav-main">
            <ul class="menu">
                <li class="menu__item">
                    <a class="menu__link" onclick="stateAni('move1')" href="#info_home" >HOME</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" onclick="stateAni('move2')" href="#info_skill" >SKILL</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" onclick="stateAni('move3')" href="#info_site" >SITE</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" onclick="stateAni('move4')" href="#info_phone" >PHONE</a>
                </li>
            </ul>
        </nav>
    </header> 

