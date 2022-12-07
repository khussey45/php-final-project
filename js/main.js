
//Global Header that adds all the links to different pages for navigation
class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<header id="header">
        <nav>
        <input type="checkbox" id="check2">
        <label for="check2" class="checkbtn2">
       <a class="checkbtn2" href="index.php"> <i class="fa-solid fa-feather"></i></a>
          </label>
        
        
      <label class="title-Name">AI CLUB</label>
        <ul>
      
          <li><a  href="index.php">Home</a></li>
          <li><a href="about.php">About AI Club</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="view_profile.php">Members Page</a></li>
          <li><a href="index.php?logout=<?php echo $user_id; ?>"class="logout-link">logout</a></li>
          
        </ul>
    </nav>
    </header>`
    }
}

customElements.define('my-header', MyHeader)

//Global Footer
class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<footer id=footer>
        <p> Copyright &copy;2022 </p>
        <p>AI Club</p>
        <p>Private Policy</p>

    </footer>`
    }
}

customElements.define('my-footer', MyFooter)