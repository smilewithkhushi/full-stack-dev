// import React from "react"
// import ReactDOM from "react-dom"
// import App from "./App"
// import Header from "./Header"

function navbar(){
    return(
        
        <header>
            
            <ul className="nav-list">
            <img src="react-logo.png" width="100"></img>
       
            <li> Home </li>
            <li> Contact </li>
            <li> About </li>
            </ul>
            </header>
    )
}

ReactDOM.render(navbar(), document.getElementById("navbar"));


const page=(
    <div>
            
        <h1>Fun Facts about React</h1>
        <ul>
            <li> Was first released in 2013</li>
            <li> Was originally created by Jordan Walke</li>
            <li> Has well over 100K stars on github</li>
            <li> is maintained by Facebook</li>
            <li>Powers thousands of enterprise apps, including mobile apps</li>
        </ul>
    </div>
)

ReactDOM.render(page, document.getElementById("root"))

function displayContent(){
    return (
        <div>
        <div>
            <h3> Reasons why I got started with react</h3>
        
        </div>
        <ol> 
            <li>Widely used </li>
            <li>Need this library for front end</li>
            <li>sounds cool</li>
        </ol>
    </div>
    )
}

ReactDOM.render(displayContent(), document.getElementById("ending"))



function footer(){
    return(
        <footer>
            2023 copyrights | All rights reserved
        </footer>
    )
}

ReactDOM.render(footer(), document.getElementById("footer"));