
	<div class="panel panel-default main-nav">
		<div class="panel-heading text-center" style="background-color: #34495e; color: white; font-family: Calibri, serif; letter-spacing: .1em; padding: 1%;"">
			<h4 style="margin-bottom: 4%;">Categories of Animals</h4>
		</div>
			<ul class="main-nav-ul">
				<li class="has-sub"><a href="#">Dogs <span class="sub-arrow"></span></a>
					<ul>
						<li><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
						<li><a href="#">Item 4</a></li>
						<li><a href="#">Item 5</a></li>
					</ul>
				</li>

				<li class="has-sub"><a href="#">Animals <span class="sub-arrow"></span></a>
					<ul>
						<li><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
						<li><a href="#">Item 4</a></li>
						<li><a href="#">Item 5</a></li>
					</ul>
				</li>

				<li class="has-sub"><a href="#">Reptiles <span class="sub-arrow"></span></a>
					<ul>
						<li><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
						<li><a href="#">Item 4</a></li>
						<li><a href="#">Item 5</a></li>
					</ul>
				</li>
			</ul>
	</div>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('.has-sub').click(function() {
				$(this).toggleClass('tap');
			});
		});
	</script>