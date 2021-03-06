body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #1e5474;
    background-color: #f7f7f7;
    margin: 0px;
}

#container {
    width: 1100px;
    height: auto;
    margin: 0px auto;
    padding: 10px;
}

#container #header {
    margin-top: 20px;
}

#container #header #menu {
    background-color: #1e5474;
    padding: 5px 10px;
    overflow: hidden;
}

#container #header #menu #user {
    float: left;
}

#container #header #menu #user a {
    color: white;
    padding-right: 5px;
    margin-top: 5px;
    display: inline-block;
    text-decoration: none;
}

#container #header #menu #button-keranjang {
    float: right;
    background-color: orange;
    padding: 2px 10px;
    border-radius: 4px;
}

#container #header #menu #button-keranjang img {
    vertical-align: bottom;
}

#container #footer {
    background-color: #1e5475;
    padding: 10px;
}

#container #footer p {
    color: white;
    text-align: right;
    font-size: 10px;
    font-style: italic;
    margin: 0px;
}

#container #content {
    padding: 10px 0px;
    overflow: hidden;
}

#container-user-akses {
    width: 350px;
    height: auto;
    margin: 50px auto;
}

.element-form {
    margin-bottom: 15px;
}

.element-form label {
    display: block;
    font-weight: bold;
}

.element-form span {
    display: block;
}

.element-form span input[type="text"],
.element-form span input[type="password"],
.element-form span textarea,
.element-form span select {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
}

.element-form span input[type="submit"] {
    background-color: #1e5475;
    border: none;
    color: white;
    font-size: 11px;
    padding: 7px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.element-form span input[type="submit"]:hover {
    background-color: orange;
}
