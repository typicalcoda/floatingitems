<template>
	<div class="wrapper">

		<!-- section & search in the same div cus no markup in between, unlike items div..check markup to understand -->
		<div class="section search"> 
			<label class="heading" for="search">Search for items</label>
			<input type="text">
		</div>

		<div class="section">
			<label class="heading">Items</label>
			<ul class="items">
				<li>
					<div class="item">
						<span class="title">
							Quality pre-owned leather sofa
						</span>
						<div class="gallery">
							<div class="arrow">
								<div class="panel"></div>
								<div class="arrow-dir">◄</div>
							</div>
							<div class="images">
								<img src="/img/sofa.jpg" alt="">
								<img src="/img/sofa.jpg" alt="">
								<img src="/img/sofa.jpg" alt="">
								<img src="/img/sofa.jpg" alt="">
							</div>
							<div class="arrow">
								<div class="panel"></div>
								<div class="arrow-dir">►</div>
							</div>
						</div>
						<div class="information">

							<div class="description">
								<span>Details</span>
								3 seats, no rips, small hidden hole, click to see more 
							</div>
						</div>
						<div class="bottom">	
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</template>


<script>
	export default {


		mounted(){
		}
	}
</script>		


<style lang="scss" scoped>
.wrapper{
	background:#fbfbfb;
	padding:30px;
	float:left;
	position:fixed;
	height:100%;
	width:392px;
	-webkit-box-shadow: 0px 0px 98px -4px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0px 0px 98px -4px rgba(0, 0, 0, 0.1);
	box-shadow: 0px 0px 98px -4px rgba(0, 0, 0, 0.1);

	.section { 
		margin-bottom:50px;
	}
	label.heading{
		color:#7ab570
	}
	input{
		outline: 0;
		display: block;
		margin: 15px 0;
		padding: 12px 13px;
		border-radius: 20px;
		border: 1px solid #f1f1f1;
		width: 100%;
		color: #8e8e8e;
	}

	ul.items{
		padding:0;
		li{
			min-height:129px;
			list-style-type:none;
			background:#fff;
			border-radius:5px;
			position:relative;
			margin:10px 0;
			-webkit-box-shadow: 0px 0px 37px 0px rgba(0,0,0,0.05);
			-moz-box-shadow: 0px 0px 37px 0px rgba(0,0,0,0.05);
			box-shadow: 0px 0px 37px 0px rgba(0,0,0,0.05);
			span.title,.description span{
				font-weight: 900;
				font-size: 13px;
				color: #159415;
				display: block;
				padding-top: 10px;
				padding-right: 20px;
				padding-left: 20px;
			}
			span.value{
				position: absolute;
				bottom: 0;
				padding: 5px 6px;
				right: 0;
				background: #6eb369;
				border-radius: 0;
				font-size: 12px;
				color: white;
				font-weight: 400;
				// position: absolute;
				// bottom: 0;
				// padding: 6px;
				// right: 0;
				// background: #6eb369;
				// border-radius: 10px 0;
				// font-size: 12px;
				// color: white;
				// font-weight: 400;
			}
			.item{
				// padding: 15px 20px;
				.gallery{
					position: relative;
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					height:107px;
					overflow: hidden;
					padding:15px 20px;
					img { 
						width: 75px;
						border-radius: 50%;
						position: relative;
						height: 75px;
						border: 2px solid #b7d6b5;
						margin-right: 7px;
					}
					div.arrow{
						div.panel{
							filter:blur(2px);
							position: absolute;
							height: calc(100% - 30px);
							width: 49px;
							padding:0 20px;
							cursor:pointer;
						}
						.arrow-dir{
							line-height: 5em;
							color: #909090;
							font-size: 16px;
							z-index: 100;
							color:#c1c1c1;
						}
						&:first-of-type{
							.panel{
								left:0;
								text-align:left;
								background: -webkit-gradient(linear, left top, right top, from(#fff), to(#ffffff85));
								background: linear-gradient(to right, #fff, #fff, #ffffffe6, #ffffff85);
							}
						}
						&:last-of-type{
							.panel{
								right: 0;
								text-align: right;
								background: -webkit-gradient(linear, right top, left top, from(#fff), color-stop(#fff), color-stop(#ffffffe6), to(#ffffff85));
								background: linear-gradient(to left, #fff, #fff, #ffffffe6, #ffffff85);						}
							}
						}
						.images{
							overflow: inherit;
							display: flex;
						}

					}
					.information{
						padding: 15px 20px;
						padding-top:0;
						.description { 
							span{
								padding: 0;
								color: #a2a2a2;
							}
							font-size: 13px;
							padding: 7px 0;
							color: #909090;
						}
					}
					.bottom { 
						clear:both;
						.progress{
							height:7px;
						}
					}
				}

			}
		}
	}
</style>

