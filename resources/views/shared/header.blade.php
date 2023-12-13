<style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* background-image: url('/img/21.jpg'); */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            background-color:#ddd;
        }

        /*nav */
        header {
            padding: 1.7rem 1rem;
            background-color: transparent;
        }

        nav {
            display: flex;
            justify-content: space-between;
            max-width: 80%;
            margin: auto;
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 800;
        }

        .logo a {
            color: white;
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            padding: 0;
            background-color: transparent;
            overflow: hidden;
        }

        li {
            padding: 0rem 1.1rem;
            float: left;
        }

        li a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .7px;
        }

        ul li a {
            position: relative;
        }

        ul li a::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 3px;
            background-color: #ff7412;
        }

        /* Center Animation */
        /* ul li a::before {
            transform: scale(0, 1);
            transition: transform .3s ease;
        }

        ul li a:hover::before {
            transform: scale(1, 1);
        } */

        /* Left Animation */
        ul li a::before {
            transform: scale(0, 1);
            transform-origin: left;
            transition: transform .3s ease;
        }

        ul li a:hover::before {
            transform: scale(1, 1);
        }

        li a.active,
        li a:hover {
            color: white;
            transition: all .3s ease-in-out
        }

        #click {
            display: none;
        }

        .menu {
            display: none;
        }

        @media only screen and (max-width:1024px) {
            nav {
                max-width: 98%;
            }
        }

        @media only screen and (max-width:768px) {
            html {
                font-size: 80%;
            }

            nav {
                max-width: 100%;
            }
        }

        @media only screen and (max-width:480px) {
            html {
                font-size: 85%;
            }

            header {
                height: 100vh;
            }

            li {
                padding: 1rem 1.1rem;
            }

            .menu {
                display: block;
                font-size: 1.5rem;
                font-weight: bold;
                color: #c30071;
            }

            ul {
                width: 100%;
                height: 100vh;
                position: absolute;
                display: flex;
                flex-direction: column;
                text-align: center;
                top: 4rem;
                left: -100%;
            }

            #click:checked~ul {
                left: 0%;
                transition: all 0.3s ease;
            }

        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">Achmad Rozaqi</a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="mainicon">
                <div class="menu">
                    <i class="bi bi-list"></i>
                </div>
            </label>
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
    </style>
    