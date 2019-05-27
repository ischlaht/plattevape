<div class="NavBar">
    <!-- <i class="material-icons">menu</i> -->

    <!-- <nav> -->
    <!-- navbar content here  -->
    <!-- </nav> -->

    <ul
      id="slide-out"
      class="sidenav"
    >
      <li>
        <div class="user-view">
          <!-- <div class="background">
            <img src="images/office.jpg">
          </div>
          <a href="#user"><img
              class="circle"
              src="images/yuna.jpg"
            ></a> -->
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
      </li>
      <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
      <li><a href="#!">Second Link</a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a class="subheader">Subheader</a></li>
      <li><a
          class="waves-effect"
          href="#!"
        >Third Link With Waves</a></li>
    </ul>

    <!-- !!Activation buton!! -->
    <a
      href="#"
      data-target="slide-out"
      class="sidenav-trigger"
    ><i
        class="material-icons"
        id="NavBarBTN"
      >menu</i></a>

  </div>

  <script>
  function initNavBar(){
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
}
initNavBar();

  </script>

  <style lang="scss">
  .NavBar {
  font-size: 200%;

  /* float: left; */
  width: auto;
  height: auto;

  margin: 0;

  padding: 0;

  color: red;
}

.NavBar {
  a #NavBarBTN {
    font-size: 200%;
    display: block;

    position: fixed;

    top: 4px;
    left: 4px;

    width: 55px;
    height: auto;

    margin: 0;
    padding: 0;

    color: red;

    &:hover {
      color: white;
    }
  }
}
/* 
#NavBar{
    
}#NavBar{
    
}#NavBar{
    
}
  </style>
