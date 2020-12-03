<?php require('header.php') ?>

      

      <div id="perform" class="title text-center"><span>過</span>去の実績</div>
      <div id="show" class="works mt-4">
        <div class="work mb-5">
          <div class="d-flex">
            <div class="left">実績サムネ</div>
            <div class="ml-2 right">
                <div class="workTitle my-2">
                  錬成教室 やいま塾
                </div>
                石垣島にある学習塾さんの<br>
                ホームページ制作を<br>
                担当させていただきました。
            </div>
          </div>
          <div class="yaimaInd mt-3 mx-3" v-if="myVisible1">
            錬成教室 やいま塾 様  (<a href="https://やいま塾.com">https://やいま塾.com</a>)<br><br>

            石垣島にある学習塾のホームページ制作を担当させていただきました。
            保護者様、生徒様にとって親近感のある、見やすく優しいデザインを心がけました。<br>
            アクセントカラーには黄緑色と桜色を選択肢、石垣島の自然と、
            合格のイメージを表現しました。<br>
            合格体験記やお知らせなどのデータは、データベースを用いて
            管理しています。<br>
            作成に引き続き、管理や更新作業も担当させていただいております。<br><br>

            使用スキル<br>
            HTML CSS Bootstrap<br>
            JavaScript(Vue.js) PHP MySQL<br>

          </div>
          <div class="mt-1 py-3 pr-3 text-right detail" v-if="!myVisible1" v-on:click="isShow1">
            詳細を見る　<span>▼</span>
          </div>
          <div class="mt-1 py-3 pr-3 text-right detail" v-if="myVisible1" v-on:click="isShow1">
            閉じる　<span>▲</span>
          </div>
        </div>
        
        <div class="work mb-5">
          <div class="d-flex">
            <div class="left">実績サムネ</div>
            <div class="ml-2 right">
                <div class="workTitle my-2">
                  My Portfolio Site
                </div>
                自分のポートフォリオを<br>
                作成しました。<br>
            </div>
          </div>
          
          <div class="portInd my-3 mx-3" v-if="myVisible2">
            ポートフォリオサイト  (当サイト)<br><br>

            できるだけシンプルで、見やすい作りを目指しました。<br>
            アクセントカラーは青系の色で統一し、<br>
            配置に関しても成果物や言語スキルの部分で反復を用いて、統一感を出しました。
            Wordpressのプラグインを用いて、フォームの実装も行っております。<br><br>

            使用スキル<br>
            HTML CSS Bootstrap<br>
            JavaScript(Vue.js) PHP<br>
          </div>
          <div class="mt-1 py-3 pr-3 text-right detail" v-if="!myVisible2" v-on:click="isShow2">
            詳細を見る　<span>▼</span>
          </div>
          <div class="mt-1 py-3 pr-3 text-right detail" v-if="myVisible2" v-on:click="isShow2">
            閉じる　<span>▲</span>
          </div>
        </div>
        <script>
          new Vue ({
            el: '#show',
            data: {
              myVisible1: false,
              myVisible2: false
            },
            methods: {
              isShow1: function(){
                this.$data.myVisible1 = !this.$data.myVisible1;
              },
              isShow2: function(){
                this.$data.myVisible2 = !this.$data.myVisible2;
              }
            }
          })
        </script>
      </div>

      <div id="skills" class="title text-center"><span>言</span>語スキル</div>
      <div class="container-fluid">
        <div class="row mx-auto">
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/html5Logo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              HTML <span>★★★★★</span>
            </div>
            <div class="lngText">
              基本の構造を理解し、<br>
              静的サイトを作成できます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/css3Logo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              CSS <span>★★★★★</span>
            </div>
            <div class="lngText">
              作りたいデザインに合わせて、<br>
              サイトを装飾できます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/BootstrapLogo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              Bootstrap <span>★★★★</span>
            </div>
            <div class="lngText">
              レスポンシブ対応のサイトを<br>
              スムーズに作成できます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/javascriptLogo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              JavaScript <span>★★★</span>
            </div>
            <div class="lngText">
              静的サイトに、<br>
              簡単な動きをつけられます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/vueLogo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              Vue.js <span>★★★</span>
            </div>
            <div class="lngText">
              JSの動きを、シンプルな<br>
              コードで実装できます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/phpLogo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              PHP <span>★★★★</span>
            </div>
            <div class="lngText">
              基本の文法を理解し、<br>
              データベースと接続できます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/mysqlLogo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              MySQL <span>★★★★</span>
            </div>
            <div class="lngText">
              データベース構造を理解し、<br>
              データの管理ができます。
            </div>
          </div>
          <div class="col-6 mt-5">
            <div class="lngImg"><img src="./images/wordpressLogo.png" class="img-fluid"></div>
            <div class="lngName my-1">
              Wordpress <span>★★★</span>
            </div>
            <div class="lngText">
              既存テーマでのサイト作成、<br>
              Wordpress化ができます。
            </div>
          </div>
        </div>
      </div>

      <div id="profile" class="title text-center"><span>プ</span>ロフィール</div>
      <div class="proText mt-4">
        豊島純斗(とよしますみと)<br>
        1998年4月7日生まれ、沖縄県石垣市出身。<br>
        千葉大学 理学部 数学情報数理学科 数学コース在学中。<br><br>

        プログラミングなどのWeb制作について学ぶことと、<br>
        家でゆっくり過ごすことが好きです。<br>
        今は引退しましたが、大学で３年間<br>
        ダンスサークルに所属していたこともあり、ダンスも好きです。
      </div>

      

      <div id="contact" class="title text-center"><span>お</span>問い合わせ</div>
      <div class="mt-4 text-center">
        Web制作の依頼等、<br>
        気軽にご連絡ください。<br>
        翌日以内に返信いたします。
      </div>
      <form action="" class="mt-4">
        <input type="text" placeholder="お名前" class="input">
        <input type="text" placeholder="メールアドレス" class="input">
        <textarea name="" class="input" cols="30" rows="10" placeholder="お問い合わせ内容"></textarea>
        <input type="submit" class="submit" value="送信">
      </form>

      <div class="footer text-center">
        ここに著作権のことを書きます。
      </div>
        
<?php require('footer.php') ?>