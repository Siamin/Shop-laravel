<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')

    <link rel="stylesheet" href="/assets/libs/css/style.css">

    <Style>
    @import url(http://weloveiconfonts.com/api/?family=fontawesome);
    @import url(https://meyerweb.com/eric/tools/css/reset/reset.css);

    [class*="fontawesome-"]:before {
        font-family: 'FontAwesome', sans-serif;
    }

    /* ---------- GENERAL ---------- */
    * {
        box-sizing: inherit;
    }

    html {
        box-sizing: border-box;
        height: 100%;
    }

    body {
        background-image: url('/img/bgLogin.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: #000;
        font-family: 'Varela Round', sans-serif;
        line-height: 1.5;
        margin: 0;
        min-height: 100%;
    }

    select {
        background-image: none;
        border: none;
        font: inherit;
        margin: 0;
        padding: 0;
        transition: all 0.3s;
    }

    input {
        background-image: none;
        border: none;
        font: inherit;
        margin: 0;
        padding: 0;
        transition: all 0.3s;
    }

    /* ---------- ALIGN ---------- */
    .align {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ---------- GRID ---------- */
    .grid {
        margin-left: auto;
        margin-right: auto;
        max-width: 90%;
        width: 400px;
    }

    /* ---------- LOGIN ---------- */
    #login h2 {
        background: #f95252;
        border-radius: 20px 20px 0 0;
        color: #fff;
        font-size: 28px;
        padding: 20px 26px;
    }

    #login h2 span[class*="fontawesome-"] {
        margin-right: 14px;
    }

    #login fieldset {
        background: #fff;
        border-radius: 0 0 20px 20px;
        padding: 20px 26px;
    }

    #login fieldset p {
        color: #777;
        margin-bottom: 14px;
    }

    #login fieldset p:last-child {
        margin-bottom: 0;
    }

    #login fieldset input {
        border-radius: 3px;
    }

    #login fieldset select,
    #login fieldset input[type="text"],
    #login fieldset input[type="email"],
    #login fieldset input[type="password"] {
        background: #eee;
        color: #777;
        padding: 4px 10px;
        width: 100%;
    }

    #login fieldset input[type="submit"] {
        background: #3c7;
        color: #fff;
        display: block;
        margin: 0 auto;
        padding: 4px 0;
        width: 100px;
    }

    #login fieldset input[type="submit"]:hover {
        background: #28ad63;
    }
    </Style>




<body class="align">

    <div class="grid">

        @yield('content')

    </div>

</body>


</html>