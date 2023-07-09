<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  border-right: 1px solid #D3AF37;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar li {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #D3AF37;
  color: white;
  border: none;
}

.openbtn:hover {
  background-color: #0094FF;
}

#main {
  transition: margin-left .5s;
  padding-top: 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

<div id="main">
  <button class="openbtn btn-sm" onclick="toggleNav()"><img src="{{ asset('assets/img/icons/filter-icon.png') }}" style="height:25px;"/></button>
</div>
<div id="mySidebar" class="sidebar opacity-85">
  <ul class="pt-5">
    @for($i = 1; $i <= 5; $i++)
    <li><input class="form-check-input form-check-lg" type="checkbox" value=""><label class="ps-1">Sayuran</label></li>
    @endfor
  </ul>
</div>

<script>
var sidebarOpen = false;

function toggleNav() {
  var sidebar = document.getElementById("mySidebar");
  var main = document.getElementById("main");
  var openBtn = document.querySelector('.openbtn');

  if (sidebarOpen) {
    sidebar.style.width = "0";
    main.style.marginLeft = "0";
    openBtn.innerHTML = '<img src="{{ asset('assets/img/icons/filter-icon.png') }}" style="height:25px;"/>';
    sidebarOpen = false;
  } else {
    sidebar.style.width = "250px";
    main.style.marginLeft = "250px";
    openBtn.innerHTML = 'X';
    sidebarOpen = true;
  }
}
</script>
