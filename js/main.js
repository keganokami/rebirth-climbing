//menuボタンコンポーネント
var menuBtnComp = {
  template: `
    <div>
        <span class="menu_trigger">
            <span></span><span></span><span></span>
        </span>
    </div>
`
};

Vue.component("menu-component", {
  template: `
  <div>
  <li><a class="home" href="./index.php">ホーム</a></li>
  <li><a class="about_us" href="./about_us.php">サイトについて</a></li>
  <li><a class="member" href="./members.php">メンバー紹介</a></li>
  <li><a class="diary" href="./diary.php">一言日記</a></li>
  <li><a class="society" href="./login.php">会員専用</a></li>
  </div>`
});

// 会員専用のリストコンポーネント　post.htmlでのみ使う
Vue.component("member-only-menu-component", {
  template: `
  <div>
  <li><a class="home" href="./index.php">ホーム</a></li>
  <li><a class="about_us" href="./about_us.php">サイトについて</a></li>
  <li><a class="member" href="./members.php">メンバー紹介</a></li>
  <li><a class="diary" href="./diary.php">一言日記</a></li>
  <li><a class="logout" href="./logout.php">ログアウト</a></li>
  </div>`
});

//root
var app = new Vue({
  el: "#app",
  data: {
    menuFlag: false,
    headH: "0px",
    isScroll: false
  },
  methods: {
    menuToggle: function() {
      //menuFlag切り替え
      this.menuFlag = !this.menuFlag;
    }
  },
  mounted: function() {
    //headerの高さ取得
    let h = document.getElementById("header").offsetHeight;
    this.headH = h + "px";
  },
  mounted() {
    document.onscroll = e => {
      this.position =
        document.documentElement.scrollTop || document.body.scrollTop;
    };
  },
  components: {
    "menu-btn": menuBtnComp
  }
});
