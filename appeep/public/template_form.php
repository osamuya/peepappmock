<?php include($_SERVER['DOCUMENT_ROOT']."/inc/meta_head.php"); ?>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/gnavi.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/inc_breadcrumbs.php"); ?>


	
<div class="mblock last">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12">

				<div class="mform">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@example.com">
							<small id="emailHelp" class="form-text text-muted">無効なEmailアドレスです。</small>
						</div>
						
						<!--Pulldown-->
						<div class="form-group">
							<label for="prf">ロケーション(都道府県)</label>
							<select class="form-control">
								<option value="北海道">北海道</option>
								<option value="青森県">青森県</option>
								<option value="岩手県">岩手県</option>
								<option value="宮城県">宮城県</option>
								<option value="秋田県">秋田県</option>
								<option value="山形県">山形県</option>
								<option value="福島県">福島県</option>
								<option value="茨城県">茨城県</option>
								<option value="栃木県">栃木県</option>
								<option value="群馬県">群馬県</option>
								<option value="埼玉県">埼玉県</option>
								<option value="千葉県">千葉県</option>
								<option value="東京都">東京都</option>
								<option value="神奈川県">神奈川県</option>
								<option value="新潟県">新潟県</option>
								<option value="富山県">富山県</option>
								<option value="石川県">石川県</option>
								<option value="福井県">福井県</option>
								<option value="山梨県">山梨県</option>
								<option value="長野県">長野県</option>
								<option value="岐阜県">岐阜県</option>
								<option value="静岡県">静岡県</option>
								<option value="愛知県">愛知県</option>
								<option value="三重県">三重県</option>
								<option value="滋賀県">滋賀県</option>
								<option value="京都府">京都府</option>
								<option value="大阪府">大阪府</option>
								<option value="兵庫県">兵庫県</option>
								<option value="奈良県">奈良県</option>
								<option value="和歌山県">和歌山県</option>
								<option value="鳥取県">鳥取県</option>
								<option value="島根県">島根県</option>
								<option value="岡山県">岡山県</option>
								<option value="広島県">広島県</option>
								<option value="山口県">山口県</option>
								<option value="徳島県">徳島県</option>
								<option value="香川県">香川県</option>
								<option value="愛媛県">愛媛県</option>
								<option value="高知県">高知県</option>
								<option value="福岡県">福岡県</option>
								<option value="佐賀県">佐賀県</option>
								<option value="長崎県">長崎県</option>
								<option value="熊本県">熊本県</option>
								<option value="大分県">大分県</option>
								<option value="宮崎県">宮崎県</option>
								<option value="鹿児島県">鹿児島県</option>
								<option value="沖縄県">沖縄県</option>
								<option value="海外">海外</option>
							</select>
							<small id="emailHelp" class="form-text text-muted">都道府県を選択してください。</small>
						</div>
						
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							<small id="emailHelp" class="form-text text-muted">パスワードを入力してください。</small>
						</div>
						
						<div class="form-group">
							<label for="mtextarea">コメント</label>
							<textarea name="" id="mtextarea" class="form-control" rows="5">
							</textarea>
							<small id="emailHelp" class="form-text text-muted">コメントを入力してください。</small>
						</div>
						


						<div class="form-group">
							
							<div class="mfileuploader">
							<input id="lefile_01" type="file" style="display:none">
							<div class="input-group">
								<input type="text" id="photoCover_01" class="form-control" placeholder="画像を選択してください。">
								<span class="input-group-btn"><button type="button" class="btn btn-info" onclick="$('input[id=lefile_01]').click();">ファイル選択</button></span>
							</div>
							<script>
								$('input[id=lefile_01]').change(function() {
									var path = $(this).val();
									$('#photoCover_01').val($(this).val().replace("C:\\fakepath\\", ""));
								});
							</script>
							</div>
							<div class="mfileuploader">
							<input id="lefile_02" type="file" style="display:none">
							<div class="input-group">
								<input type="text" id="photoCover_02" class="form-control" placeholder="画像を選択してください。">
								<span class="input-group-btn"><button type="button" class="btn btn-info" onclick="$('input[id=lefile_02]').click();">ファイル選択</button></span>
							</div>
							<script>
								$('input[id=lefile_02]').change(function() {
									var path = $(this).val();
									$('#photoCover_02').val($(this).val().replace("C:\\fakepath\\", ""));
								});
							</script>
							</div>
							
							
							
						</div>

						
						<div class="form-group">
							<div>
								<label><input type="radio" name="optradio"> Option 1　</label>
								<label><input type="radio" name="optradio"> Option 1　</label>
								<label><input type="radio" name="optradio"> Option 1　</label>
							</div>
							
							<small id="radioHelp" class="form-text text-muted">選択してください。</small>
						</div>
						
						<div class="form-group">
							<label class="checkbox-inline"><input type="checkbox" value="">check 1</label>
							<label class="checkbox-inline"><input type="checkbox" value="">check 2</label>
							<label class="checkbox-inline"><input type="checkbox" value="" disabled="">check 3</label>
						</div>
						
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input"><span class="checkbox-text">次回から自動的にログインする</span>Check me out
							</label>
						</div>
						<div class="form-botton last">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
				
				<?php include($_SERVER['DOCUMENT_ROOT']."/inc/inc_photo.php"); ?>
				
				
			</div>
			
			<div class="col-sm-6 col-xs-12">
				<div class="mtext">
					<div class="mtext-header">
						<h2 class="h3">タイトル</h2>
					</div>
					<div class="mtext-body">
						この作品が『モナ・リザ』と呼ばれているのは、16世紀のイタリア人芸術家、伝記作家ジョルジョ・ヴァザーリの著書『画家・彫刻家・建築家列伝』の「レオナルドは、フランチェスコ・デル・ジョコンドから妻モナ・リザの肖像画制作の依頼を受けた」という記述が元となっている[4] [5]。イタリア語の「ma donna」は「私の貴婦人」を意味し、短縮形で「mona」と綴られる。ヴァザーリが著作に書いているように「mona」が伝統的な綴りではあるが[4]、現代イタリア語では「madonna」の短縮形は「monna」となることが多い。したがって「モナ・リザ」を現代イタリア語で綴ると「Monna Lisa」となるが、世界の多くの言語では一般的に「Mona Lisa」と綴られている[6]。ハイデルベルク大学で発見された、フィレンツェの役人だったアゴスティーノ・ヴェスプッチが1503年に記した書き込み。レオナルドがリザ・デル・ジョコンドの肖像画を制作しているという内容が書かれているレオナルドの伝記が書かれたヴァザーリの著書『画家・彫刻家・建築家列伝』は、レオナルドが死去した31年後の1550年に出版されたものである。そして現在にいたるまで、『モナ・リザ』の来歴やモデルの特定などの情報源としては、この『画家・彫刻家・建築家列伝』がもっともよく知られた文献資料となっている。2005年にドイツのハイデルベルク大学図書館の研究者が、大学の蔵書である1477年に出版されたキケロ全集の余白部分にラテン語の書込みを発見した。この書き込みは、レオナルドの同時代人でフィレンツェの役人だったアゴスティーノ・ヴェスプッチ (en:Agostino Vespucci) が1503年に記したもので、ヴェスプッチはレオナルドを著名な古代ギリシアの画家アペレスに例える文章を書いた人物だった。ヴェスプッチの書き込みには、レオナルドがリザ・デル・ジョコンドの肖像画を制作している最中であることが、1503年10月という日付とともに記されていた[7] [8]。2004年に実施された赤外線分析の結果からも、『モナ・リザ』の制作開始年が、ジョコンドが次男を出産した1503年ごろだといわれている[9] [10]。<br>レオナルドが1525年に死去する際に、弟子のサライに「ラ・ジョコンダ (la Gioconda)」という題名の肖像画を遺贈したことが、サライの個人的覚書に記されている。イタリア語の「jocund」は「幸福」や「陽気な」を意味する。「La Gioconda」はモデルの姓であると同時に、「幸せな人」を意味する「La jocund」の語呂あわせにもなっている[11][12]。『モナ・リザ』のモデルであるリザ・デル・ジョコンドは[13] [14]、フィレンツェとトスカーナに起源を持つゲラルディーニ家の出身で、フィレンツェの裕福な絹商人フランチェスコ・デル・ジョコンドと結婚した[11]。フランチェスコが『モナ・リザ』の制作をレオナルドに依頼したのは、デル・ジョコンド一家の新居引越しと次男アドレアの出産祝いだったと考えられている[15]
					</div>
				</div>
				<div class="mtext">
					<div class="mtext-header">
						<h2 class="h3">タイトル</h2>
					</div>
					<div class="mtext-body">
						<h3 class="h3">h3タイトル</h3>
						<h4 class="h3">h4タイトル</h4>
						<h5 class="h3">h5タイトル</h5>
						<h6 class="h3">h6タイトル</h6>
						<p>
						この作品が『モナ・リザ』と呼ばれているのは、16世紀のイタリア人芸術家、伝記作家ジョルジョ・ヴァザーリの著書『画家・彫刻家・建築家列伝』の「レオナルドは、フランチェスコ・デル・ジョコンドから妻モナ・リザの肖像画制作の依頼を受けた」という記述が元となっている[4] [5]。
						</p>
					</div>
				</div>
				
				<div class="msearch first last">
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class='glyphicon glyphicon-search'></i>
							</button>
						</span>
					</div>
				</div><!--// msearch-->
				
				<div class="mtable first last">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">メキシコの首都に直径10メートルの陥没穴 熱帯暴風雨の影響で</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">話題のジャズトランペット奏者、報道陣に 「あんたたちがこういうことやって日本の文化をダメにしてるんだよ」</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">鉄も溶ける超高温の惑星発見！　太陽系外惑星の驚異の世界</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">メキシコの首都に直径10メートルの陥没穴 熱帯暴風雨の影響で</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">メキシコの首都に直径10メートルの陥没穴 熱帯暴風雨の影響で</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">話題のジャズトランペット奏者、報道陣に 「あんたたちがこういうことやって日本の文化をダメにしてるんだよ」</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">鉄も溶ける超高温の惑星発見！　太陽系外惑星の驚異の世界</a></td>
								<td>2017.09.02</td>
							</tr>
							<tr>
								<td><div>1000</div><div>東京</div></td>
								<td><a href="">メキシコの首都に直径10メートルの陥没穴 熱帯暴風雨の影響で</a></td>
								<td>2017.09.02</td>
							</tr>
						</table>
					</div>
				</div><!--// mtable-->
				
				<div class="mpagenation">
					<nav>
						<ul class="pagination">
							<li class="disabled">
								<a href="#" aria-label="前のページへ">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="次のページへ">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
				</div><!--// mpagenation-->
				
				
				
				
				
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.php"); ?>