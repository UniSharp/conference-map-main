<!DOCTYPE html>
<!-- <html lang="zh-tw" manifest="/unisharp-map.appcache">-->
<html lang="zh-tw">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta name="author" content="g0v contributors" />
        <meta name="description" content="零時廣場，您辦活的的好幫手。" />
        <meta name="keywords" content="零時廣場, 辦活動">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <title>零時廣場</title>
        <link rel="stylesheet" href="/assets/css/master.css?ts=999" />
        <link rel="stylesheet" href="/assets/css/default.css?ts=1375456132" />
        <link rel="apple-touch-icon" href="/assets/images/unisharp-map-icon.png"/>
        <link rel="shortcut icon" href="/assets/images/unisharp-map-icon.png"/>
        <noscript>
            <link rel="stylesheet" href="/assets/css/mobile.min.css?ts=1375456132" />
        </noscript>
        <link rel="stylesheet" href="/assets/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
    </head>
    <body>
        <div id="fb-root"></div>
        <div class="container_12">
			<a href="https://github.com/g0v/conference-map-main/"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://github-camo.global.ssl.fastly.net/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>

			<div id="mobile_cover_bg"></div>
			<div id="hd_wrap" class="clearfix">
				<div id="hd" class="grid_12 clearfix">
					<h1><a class="logo" style="border-style:none;" href="/"></a><p> - 零時廣場<p></h1>
						<ul id="nav">
							<li class="cur mobile_float_r"><a href="/congressoccupied/program">Schedule</a></li>
						</ul>
				</div>
			</div><!--#hd_wrap-->

            <div id="bd"  class="grid_12 clearfix">
                <div id="bd_wrap" class="clearfix">
                    <div id="map_slider">
                        <div class="grid_3 left clearfix">
                            <nav class="date clearfix">
                                <ul  class="clearfix" id="DateTable">
                                    主題時間軸 (T.B.D.)
                                </ul>
                            </nav><!-- date -->
                            <div class="timeline">
                                <ul class="clearfix" id="TimeTable">

                                </ul>
                            </div><!-- #timeline -->
                            <div id="g0v-left-bar">
                            </div>
                        </div><!-- grid3 left -->
                    </div> <!-- map_slider -->
                    <div id="map" class="program grid_9 right">
                        <div id="program_info" style="display:block;"></div>
                        <div id="floor_name"></div>
                        <div id="date_name"></div>
                        <div class="diy_tip">
                            <span class="txt"></span>
                            <span class="triangle"></span>
                        </div>
                        <div id="map-container" style="position: relative;">
                            <div id="F1" class='clearfix' style="position: relative; top: 0px; left: 0px; width: 100%; z-index: 10;">
								<div class="y 0  clearfix" data-yposition="0">
									<div class="x 0" data-room="1:0:0:1"></div>
									<div class="x 1" data-room="1:1:0:1"></div>
									<div class="x 2" data-room="1:2:0:1"></div>
									<div class="x 3" data-room="1:3:0:1"></div>
									<div class="x 4" data-room="1:4:0:1"></div>
									<div class="x 5" data-room="1:5:0:1"></div>
									<div class="x 6" data-room="1:6:0:1"></div>
									<div class="x 7" data-room="1:7:0:1"></div>
									<div class="x 8" data-room="1:8:0:1"></div>
									<div class="x 9" data-room="1:9:0:1"></div>
									<div class="x 10" data-room="1:10:0:1"></div>
									<div class="x 11" data-room="1:11:0:1"></div>
									<div class="x 12" data-room="1:12:0:1"></div>
									<div class="x 13" data-room="1:13:0:1"></div>
									<div class="x 14" data-room="1:14:0:1"></div>
									<div class="x 15" data-room="1:15:0:1"></div>
									<div class="x 16" data-room="1:16:0:1"></div>
									<div class="x 17" data-room="1:17:0:1"></div>
									<div class="x 18" data-room="1:18:0:1"></div>
									<div class="x 19" data-room="1:19:0:1"></div>
									<div class="x 20" data-room="1:20:0:1"></div>
									<div class="x 21" data-room="1:21:0:1"></div>
									<div class="x 22" data-room="1:22:0:1"></div>
									<div class="x 23" data-room="1:23:0:1"></div>
									<div class="x 24" data-room="1:24:0:1"></div>
									<div class="x 25" data-room="1:25:0:1"></div>
									<div class="x 26" data-room="1:26:0:1"></div>
									<div class="x 27" data-room="1:27:0:1"></div>
									<div class="x 28" data-room="1:28:0:1"></div>
									<div class="x 29" data-room="1:29:0:1"></div>
									<div class="x 30" data-room="1:30:0:1"></div>
								</div>
								<div class="y 1  clearfix" data-yposition="1">
									<div class="x 0" data-room="1:0:1:1"></div>
									<div class="x 1" data-room="1:1:1:1"></div>
									<div class="x 2" data-room="1:2:1:1"></div>
									<div class="x 3" data-room="1:3:1:1"></div>
									<div class="x 4" data-room="1:4:1:1"></div>
									<div class="x 5" data-room="1:5:1:1"></div>
									<div class="x 6" data-room="1:6:1:1"></div>
									<div class="x 7" data-room="1:7:1:1"></div>
									<div class="x 8" data-room="1:8:1:1"></div>
									<div class="x 9" data-room="1:9:1:1"></div>
									<div class="x 10" data-room="1:10:1:1"></div>
									<div class="x 11" data-room="1:11:1:1"></div>
									<div class="x 12" data-room="1:12:1:1"></div>
									<div class="x 13" data-room="1:13:1:1"></div>
									<div class="x 14" data-room="1:14:1:1"></div>
									<div class="x 15" data-room="1:15:1:1"></div>
									<div class="x 16" data-room="1:16:1:1"></div>
									<div class="x 17" data-room="1:17:1:1"></div>
									<div class="x 18" data-room="1:18:1:1"></div>
									<div class="x 19" data-room="1:19:1:1"></div>
									<div class="x 20" data-room="1:20:1:1"></div>
									<div class="x 21" data-room="1:21:1:1"></div>
									<div class="x 22" data-room="1:22:1:1"></div>
									<div class="x 23" data-room="1:23:1:1"></div>
									<div class="x 24" data-room="1:24:1:1"></div>
									<div class="x 25" data-room="1:25:1:1"></div>
									<div class="x 26" data-room="1:26:1:1"></div>
									<div class="x 27" data-room="1:27:1:1"></div>
									<div class="x 28" data-room="1:28:1:1"></div>
									<div class="x 29" data-room="1:29:1:1"></div>
									<div class="x 30" data-room="1:30:1:1"></div>
								</div>
								<div class="y 2  clearfix" data-yposition="2">
									<div class="x 0" data-room="1:0:2:1"></div>
									<div class="x 1" data-room="1:1:2:1"></div>
									<div class="x 2" data-room="1:2:2:1"></div>
									<div class="x 3" data-room="1:3:2:1"></div>
									<div class="x 4" data-room="1:4:2:1"></div>
									<div class="x 5" data-room="1:5:2:1"></div>
									<div class="x 6" data-room="1:6:2:1"></div>
									<div class="x 7" data-room="1:7:2:1"></div>
									<div class="x 8" data-room="1:8:2:1"></div>
									<div class="x 9" data-room="1:9:2:1"></div>
									<div class="x 10" data-room="1:10:2:1"></div>
									<div class="x 11" data-room="1:11:2:1"></div>
									<div class="x 12" data-room="1:12:2:1"></div>
									<div class="x 13" data-room="1:13:2:1"></div>
									<div class="x 14" data-room="1:14:2:1"></div>
									<div class="x 15" data-room="1:15:2:1"></div>
									<div class="x 16" data-room="1:16:2:1"></div>
									<div class="x 17" data-room="1:17:2:1"></div>
									<div class="x 18" data-room="1:18:2:1"></div>
									<div class="x 19" data-room="1:19:2:1"></div>
									<div class="x 20" data-room="1:20:2:1"></div>
									<div class="x 21" data-room="1:21:2:1"></div>
									<div class="x 22" data-room="1:22:2:1"></div>
									<div class="x 23" data-room="1:23:2:1"></div>
									<div class="x 24" data-room="1:24:2:1"></div>
									<div class="x 25" data-room="1:25:2:1"></div>
									<div class="x 26" data-room="1:26:2:1"></div>
									<div class="x 27" data-room="1:27:2:1"></div>
									<div class="x 28" data-room="1:28:2:1"></div>
									<div class="x 29" data-room="1:29:2:1"></div>
									<div class="x 30" data-room="1:30:2:1"></div>
								</div>
								<div class="y 3  clearfix" data-yposition="3">
									<div class="x 0" data-room="1:0:3:1"></div>
									<div class="x 1" data-room="1:1:3:1"></div>
									<div class="x 2" data-room="1:2:3:1"></div>
									<div class="x 3" data-room="1:3:3:1"></div>
									<div class="x 4" data-room="1:4:3:1"></div>
									<div class="x 5" data-room="1:5:3:1"></div>
									<div class="x 6" data-room="1:6:3:1"></div>
									<div class="x 7" data-room="1:7:3:1"></div>
									<div class="x 8" data-room="1:8:3:1"></div>
									<div class="x 9" data-room="1:9:3:1"></div>
									<div class="x 10" data-room="1:10:3:1"></div>
									<div class="x 11" data-room="1:11:3:1"></div>
									<div class="x 12" data-room="1:12:3:1"></div>
									<div class="x 13" data-room="1:13:3:1"></div>
									<div class="x 14" data-room="1:14:3:1"></div>
									<div class="x 15" data-room="1:15:3:1"></div>
									<div class="x 16" data-room="1:16:3:1"></div>
									<div class="x 17" data-room="1:17:3:1"></div>
									<div class="x 18" data-room="1:18:3:1"></div>
									<div class="x 19" data-room="1:19:3:1"></div>
									<div class="x 20" data-room="1:20:3:1"></div>
									<div class="x 21" data-room="1:21:3:1"></div>
									<div class="x 22" data-room="1:22:3:1"></div>
									<div class="x 23" data-room="1:23:3:1"></div>
									<div class="x 24" data-room="1:24:3:1"></div>
									<div class="x 25" data-room="1:25:3:1"></div>
									<div class="x 26" data-room="1:26:3:1"></div>
									<div class="x 27" data-room="1:27:3:1"></div>
									<div class="x 28" data-room="1:28:3:1"></div>
									<div class="x 29" data-room="1:29:3:1"></div>
									<div class="x 30" data-room="1:30:3:1"></div>
								</div>
								<div class="y 4  clearfix" data-yposition="4">
									<div class="x 0" data-room="1:0:4:1"></div>
									<div class="x 1" data-room="1:1:4:1"></div>
									<div class="x 2" data-room="1:2:4:1"></div>
									<div class="x 3" data-room="1:3:4:1"></div>
									<div class="x 4" data-room="1:4:4:1"></div>
									<div class="x 5" data-room="1:5:4:1"></div>
									<div class="x 6" data-room="1:6:4:1"></div>
									<div class="x 7" data-room="1:7:4:1"></div>
									<div class="x 8" data-room="1:8:4:1"></div>
									<div class="x 9" data-room="1:9:4:1"></div>
									<div class="x 10" data-room="1:10:4:1"></div>
									<div class="x 11" data-room="1:11:4:1"></div>
									<div class="x 12" data-room="1:12:4:1"></div>
									<div class="x 13" data-room="1:13:4:1"></div>
									<div class="x 14" data-room="1:14:4:1"></div>
									<div class="x 15" data-room="1:15:4:1"></div>
									<div class="x 16" data-room="1:16:4:1"></div>
									<div class="x 17" data-room="1:17:4:1"></div>
									<div class="x 18" data-room="1:18:4:1"></div>
									<div class="x 19" data-room="1:19:4:1"></div>
									<div class="x 20" data-room="1:20:4:1"></div>
									<div class="x 21" data-room="1:21:4:1"></div>
									<div class="x 22" data-room="1:22:4:1"></div>
									<div class="x 23" data-room="1:23:4:1"></div>
									<div class="x 24" data-room="1:24:4:1"></div>
									<div class="x 25" data-room="1:25:4:1"></div>
									<div class="x 26" data-room="1:26:4:1"></div>
									<div class="x 27" data-room="1:27:4:1"></div>
									<div class="x 28" data-room="1:28:4:1"></div>
									<div class="x 29" data-room="1:29:4:1"></div>
									<div class="x 30" data-room="1:30:4:1"></div>
								</div>
								<div class="y 5  clearfix" data-yposition="5">
									<div class="x 0" data-room="1:0:5:1"></div>
									<div class="x 1" data-room="1:1:5:1"></div>
									<div class="x 2" data-room="1:2:5:1"></div>
									<div class="x 3" data-room="1:3:5:1"></div>
									<div class="x 4" data-room="1:4:5:1"></div>
									<div class="x 5" data-room="1:5:5:1"></div>
									<div class="x 6" data-room="1:6:5:1"></div>
									<div class="x 7" data-room="1:7:5:1"></div>
									<div class="x 8" data-room="1:8:5:1"></div>
									<div class="x 9" data-room="1:9:5:1"></div>
									<div class="x 10" data-room="1:10:5:1"></div>
									<div class="x 11" data-room="1:11:5:1"></div>
									<div class="x 12" data-room="1:12:5:1"></div>
									<div class="x 13" data-room="1:13:5:1"></div>
									<div class="x 14" data-room="1:14:5:1"></div>
									<div class="x 15" data-room="1:15:5:1"></div>
									<div class="x 16" data-room="1:16:5:1"></div>
									<div class="x 17" data-room="1:17:5:1"></div>
									<div class="x 18" data-room="1:18:5:1"></div>
									<div class="x 19" data-room="1:19:5:1"></div>
									<div class="x 20" data-room="1:20:5:1"></div>
									<div class="x 21" data-room="1:21:5:1"></div>
									<div class="x 22" data-room="1:22:5:1"></div>
									<div class="x 23" data-room="1:23:5:1"></div>
									<div class="x 24" data-room="1:24:5:1"></div>
									<div class="x 25" data-room="1:25:5:1"></div>
									<div class="x 26" data-room="1:26:5:1"></div>
									<div class="x 27" data-room="1:27:5:1"></div>
									<div class="x 28" data-room="1:28:5:1"></div>
									<div class="x 29" data-room="1:29:5:1"></div>
									<div class="x 30" data-room="1:30:5:1"></div>
								</div>
								<div class="y 6  clearfix" data-yposition="6">
									<div class="x 0" data-room="1:0:6:1"></div>
									<div class="x 1" data-room="1:1:6:1"></div>
									<div class="x 2" data-room="1:2:6:1"></div>
									<div class="x 3" data-room="1:3:6:1"></div>
									<div class="x 4" data-room="1:4:6:1"></div>
									<div class="x 5" data-room="1:5:6:1"></div>
									<div class="x 6" data-room="1:6:6:1"></div>
									<div class="x 7" data-room="1:7:6:1"></div>
									<div class="x 8" data-room="1:8:6:1"></div>
									<div class="x 9" data-room="1:9:6:1"></div>
									<div class="x 10" data-room="1:10:6:1"></div>
									<div class="x 11" data-room="1:11:6:1"></div>
									<div class="x 12" data-room="1:12:6:1"></div>
									<div class="x 13" data-room="1:13:6:1"></div>
									<div class="x 14" data-room="1:14:6:1"></div>
									<div class="x 15" data-room="1:15:6:1"></div>
									<div class="x 16" data-room="1:16:6:1"></div>
									<div class="x 17" data-room="1:17:6:1"></div>
									<div class="x 18" data-room="1:18:6:1"></div>
									<div class="x 19" data-room="1:19:6:1"></div>
									<div class="x 20" data-room="1:20:6:1"></div>
									<div class="x 21" data-room="1:21:6:1"></div>
									<div class="x 22" data-room="1:22:6:1"></div>
									<div class="x 23" data-room="1:23:6:1"></div>
									<div class="x 24" data-room="1:24:6:1"></div>
									<div class="x 25" data-room="1:25:6:1"></div>
									<div class="x 26" data-room="1:26:6:1"></div>
									<div class="x 27" data-room="1:27:6:1"></div>
									<div class="x 28" data-room="1:28:6:1"></div>
									<div class="x 29" data-room="1:29:6:1"></div>
									<div class="x 30" data-room="1:30:6:1"></div>
								</div>
								<div class="y 7  clearfix" data-yposition="7">
									<div class="x 0" data-room="1:0:7:1"></div>
									<div class="x 1" data-room="1:1:7:1"></div>
									<div class="x 2" data-room="1:2:7:1"></div>
									<div class="x 3" data-room="1:3:7:1"></div>
									<div class="x 4" data-room="1:4:7:1"></div>
									<div class="x 5" data-room="1:5:7:1"></div>
									<div class="x 6" data-room="1:6:7:1"></div>
									<div class="x 7" data-room="1:7:7:1"></div>
									<div class="x 8" data-room="1:8:7:1"></div>
									<div class="x 9" data-room="1:9:7:1"></div>
									<div class="x 10" data-room="1:10:7:1"></div>
									<div class="x 11" data-room="1:11:7:1"></div>
									<div class="x 12" data-room="1:12:7:1"></div>
									<div class="x 13" data-room="1:13:7:1"></div>
									<div class="x 14" data-room="1:14:7:1"></div>
									<div class="x 15" data-room="1:15:7:1"></div>
									<div class="x 16" data-room="1:16:7:1"></div>
									<div class="x 17" data-room="1:17:7:1"></div>
									<div class="x 18" data-room="1:18:7:1"></div>
									<div class="x 19" data-room="1:19:7:1"></div>
									<div class="x 20" data-room="1:20:7:1"></div>
									<div class="x 21" data-room="1:21:7:1"></div>
									<div class="x 22" data-room="1:22:7:1"></div>
									<div class="x 23" data-room="1:23:7:1"></div>
									<div class="x 24" data-room="1:24:7:1"></div>
									<div class="x 25" data-room="1:25:7:1"></div>
									<div class="x 26" data-room="1:26:7:1"></div>
									<div class="x 27" data-room="1:27:7:1"></div>
									<div class="x 28" data-room="1:28:7:1"></div>
									<div class="x 29" data-room="1:29:7:1"></div>
									<div class="x 30" data-room="1:30:7:1"></div>
								</div>
								<div class="y 8  clearfix" data-yposition="8">
									<div class="x 0" data-room="1:0:8:1"></div>
									<div class="x 1" data-room="1:1:8:1"></div>
									<div class="x 2" data-room="1:2:8:1"></div>
									<div class="x 3" data-room="1:3:8:1"></div>
									<div class="x 4" data-room="1:4:8:1"></div>
									<div class="x 5" data-room="1:5:8:1"></div>
									<div class="x 6" data-room="1:6:8:1"></div>
									<div class="x 7" data-room="1:7:8:1"></div>
									<div class="x 8" data-room="1:8:8:1"></div>
									<div class="x 9" data-room="1:9:8:1"></div>
									<div class="x 10" data-room="1:10:8:1"></div>
									<div class="x 11" data-room="1:11:8:1"></div>
									<div class="x 12" data-room="1:12:8:1"></div>
									<div class="x 13" data-room="1:13:8:1"></div>
									<div class="x 14" data-room="1:14:8:1"></div>
									<div class="x 15" data-room="1:15:8:1"></div>
									<div class="x 16" data-room="1:16:8:1"></div>
									<div class="x 17" data-room="1:17:8:1"></div>
									<div class="x 18" data-room="1:18:8:1"></div>
									<div class="x 19" data-room="1:19:8:1"></div>
									<div class="x 20" data-room="1:20:8:1"></div>
									<div class="x 21" data-room="1:21:8:1"></div>
									<div class="x 22" data-room="1:22:8:1"></div>
									<div class="x 23" data-room="1:23:8:1"></div>
									<div class="x 24" data-room="1:24:8:1"></div>
									<div class="x 25" data-room="1:25:8:1"></div>
									<div class="x 26" data-room="1:26:8:1"></div>
									<div class="x 27" data-room="1:27:8:1"></div>
									<div class="x 28" data-room="1:28:8:1"></div>
									<div class="x 29" data-room="1:29:8:1"></div>
									<div class="x 30" data-room="1:30:8:1"></div>
								</div>
								<div class="y 9  clearfix" data-yposition="9">
									<div class="x 0" data-room="1:0:9:1"></div>
									<div class="x 1" data-room="1:1:9:1"></div>
									<div class="x 2" data-room="1:2:9:1"></div>
									<div class="x 3" data-room="1:3:9:1"></div>
									<div class="x 4" data-room="1:4:9:1"></div>
									<div class="x 5" data-room="1:5:9:1"></div>
									<div class="x 6" data-room="1:6:9:1"></div>
									<div class="x 7" data-room="1:7:9:1"></div>
									<div class="x 8" data-room="1:8:9:1"></div>
									<div class="x 9" data-room="1:9:9:1"></div>
									<div class="x 10" data-room="1:10:9:1"></div>
									<div class="x 11" data-room="1:11:9:1"></div>
									<div class="x 12" data-room="1:12:9:1"></div>
									<div class="x 13" data-room="1:13:9:1"></div>
									<div class="x 14" data-room="1:14:9:1"></div>
									<div class="x 15" data-room="1:15:9:1"></div>
									<div class="x 16" data-room="1:16:9:1"></div>
									<div class="x 17" data-room="1:17:9:1"></div>
									<div class="x 18" data-room="1:18:9:1"></div>
									<div class="x 19" data-room="1:19:9:1"></div>
									<div class="x 20" data-room="1:20:9:1"></div>
									<div class="x 21" data-room="1:21:9:1"></div>
									<div class="x 22" data-room="1:22:9:1"></div>
									<div class="x 23" data-room="1:23:9:1"></div>
									<div class="x 24" data-room="1:24:9:1"></div>
									<div class="x 25" data-room="1:25:9:1"></div>
									<div class="x 26" data-room="1:26:9:1"></div>
									<div class="x 27" data-room="1:27:9:1"></div>
									<div class="x 28" data-room="1:28:9:1"></div>
									<div class="x 29" data-room="1:29:9:1"></div>
									<div class="x 30" data-room="1:30:9:1"></div>
								</div>
								<div class="y 10  clearfix" data-yposition="10">
									<div class="x 0" data-room="1:0:10:1"></div>
									<div class="x 1" data-room="1:1:10:1"></div>
									<div class="x 2" data-room="1:2:10:1"></div>
									<div class="x 3" data-room="1:3:10:1"></div>
									<div class="x 4" data-room="1:4:10:1"></div>
									<div class="x 5" data-room="1:5:10:1"></div>
									<div class="x 6" data-room="1:6:10:1"></div>
									<div class="x 7" data-room="1:7:10:1"></div>
									<div class="x 8" data-room="1:8:10:1"></div>
									<div class="x 9" data-room="1:9:10:1"></div>
									<div class="x 10" data-room="1:10:10:1"></div>
									<div class="x 11" data-room="1:11:10:1"></div>
									<div class="x 12" data-room="1:12:10:1"></div>
									<div class="x 13" data-room="1:13:10:1"></div>
									<div class="x 14" data-room="1:14:10:1"></div>
									<div class="x 15" data-room="1:15:10:1"></div>
									<div class="x 16" data-room="1:16:10:1"></div>
									<div class="x 17" data-room="1:17:10:1"></div>
									<div class="x 18" data-room="1:18:10:1"></div>
									<div class="x 19" data-room="1:19:10:1"></div>
									<div class="x 20" data-room="1:20:10:1"></div>
									<div class="x 21" data-room="1:21:10:1"></div>
									<div class="x 22" data-room="1:22:10:1"></div>
									<div class="x 23" data-room="1:23:10:1"></div>
									<div class="x 24" data-room="1:24:10:1"></div>
									<div class="x 25" data-room="1:25:10:1"></div>
									<div class="x 26" data-room="1:26:10:1"></div>
									<div class="x 27" data-room="1:27:10:1"></div>
									<div class="x 28" data-room="1:28:10:1"></div>
									<div class="x 29" data-room="1:29:10:1"></div>
									<div class="x 30" data-room="1:30:10:1"></div>
								</div>
								<div class="y 11  clearfix" data-yposition="11">
									<div class="x 0" data-room="1:0:11:1"></div>
									<div class="x 1" data-room="1:1:11:1"></div>
									<div class="x 2" data-room="1:2:11:1"></div>
									<div class="x 3" data-room="1:3:11:1"></div>
									<div class="x 4" data-room="1:4:11:1"></div>
									<div class="x 5" data-room="1:5:11:1"></div>
									<div class="x 6" data-room="1:6:11:1"></div>
									<div class="x 7" data-room="1:7:11:1"></div>
									<div class="x 8" data-room="1:8:11:1"></div>
									<div class="x 9" data-room="1:9:11:1"></div>
									<div class="x 10" data-room="1:10:11:1"></div>
									<div class="x 11" data-room="1:11:11:1"></div>
									<div class="x 12" data-room="1:12:11:1"></div>
									<div class="x 13" data-room="1:13:11:1"></div>
									<div class="x 14" data-room="1:14:11:1"></div>
									<div class="x 15" data-room="1:15:11:1"></div>
									<div class="x 16" data-room="1:16:11:1"></div>
									<div class="x 17" data-room="1:17:11:1"></div>
									<div class="x 18" data-room="1:18:11:1"></div>
									<div class="x 19" data-room="1:19:11:1"></div>
									<div class="x 20" data-room="1:20:11:1"></div>
									<div class="x 21" data-room="1:21:11:1"></div>
									<div class="x 22" data-room="1:22:11:1"></div>
									<div class="x 23" data-room="1:23:11:1"></div>
									<div class="x 24" data-room="1:24:11:1"></div>
									<div class="x 25" data-room="1:25:11:1"></div>
									<div class="x 26" data-room="1:26:11:1"></div>
									<div class="x 27" data-room="1:27:11:1"></div>
									<div class="x 28" data-room="1:28:11:1"></div>
									<div class="x 29" data-room="1:29:11:1"></div>
									<div class="x 30" data-room="1:30:11:1"></div>
								</div>
								<div class="y 12  clearfix" data-yposition="12">
									<div class="x 0" data-room="1:0:12:1"></div>
									<div class="x 1" data-room="1:1:12:1"></div>
									<div class="x 2" data-room="1:2:12:1"></div>
									<div class="x 3" data-room="1:3:12:1"></div>
									<div class="x 4" data-room="1:4:12:1"></div>
									<div class="x 5" data-room="1:5:12:1"></div>
									<div class="x 6" data-room="1:6:12:1"></div>
									<div class="x 7" data-room="1:7:12:1"></div>
									<div class="x 8" data-room="1:8:12:1"></div>
									<div class="x 9" data-room="1:9:12:1"></div>
									<div class="x 10" data-room="1:10:12:1"></div>
									<div class="x 11" data-room="1:11:12:1"></div>
									<div class="x 12" data-room="1:12:12:1"></div>
									<div class="x 13" data-room="1:13:12:1"></div>
									<div class="x 14" data-room="1:14:12:1"></div>
									<div class="x 15" data-room="1:15:12:1"></div>
									<div class="x 16" data-room="1:16:12:1"></div>
									<div class="x 17" data-room="1:17:12:1"></div>
									<div class="x 18" data-room="1:18:12:1"></div>
									<div class="x 19" data-room="1:19:12:1"></div>
									<div class="x 20" data-room="1:20:12:1"></div>
									<div class="x 21" data-room="1:21:12:1"></div>
									<div class="x 22" data-room="1:22:12:1"></div>
									<div class="x 23" data-room="1:23:12:1"></div>
									<div class="x 24" data-room="1:24:12:1"></div>
									<div class="x 25" data-room="1:25:12:1"></div>
									<div class="x 26" data-room="1:26:12:1"></div>
									<div class="x 27" data-room="1:27:12:1"></div>
									<div class="x 28" data-room="1:28:12:1"></div>
									<div class="x 29" data-room="1:29:12:1"></div>
									<div class="x 30" data-room="1:30:12:1"></div>
								</div>
								<div class="y 13  clearfix" data-yposition="13">
									<div class="x 0" data-room="1:0:13:1"></div>
									<div class="x 1" data-room="1:1:13:1"></div>
									<div class="x 2" data-room="1:2:13:1"></div>
									<div class="x 3" data-room="1:3:13:1"></div>
									<div class="x 4" data-room="1:4:13:1"></div>
									<div class="x 5" data-room="1:5:13:1"></div>
									<div class="x 6" data-room="1:6:13:1"></div>
									<div class="x 7" data-room="1:7:13:1"></div>
									<div class="x 8" data-room="1:8:13:1"></div>
									<div class="x 9" data-room="1:9:13:1"></div>
									<div class="x 10" data-room="1:10:13:1"></div>
									<div class="x 11" data-room="1:11:13:1"></div>
									<div class="x 12" data-room="1:12:13:1"></div>
									<div class="x 13" data-room="1:13:13:1"></div>
									<div class="x 14" data-room="1:14:13:1"></div>
									<div class="x 15" data-room="1:15:13:1"></div>
									<div class="x 16" data-room="1:16:13:1"></div>
									<div class="x 17" data-room="1:17:13:1"></div>
									<div class="x 18" data-room="1:18:13:1"></div>
									<div class="x 19" data-room="1:19:13:1"></div>
									<div class="x 20" data-room="1:20:13:1"></div>
									<div class="x 21" data-room="1:21:13:1"></div>
									<div class="x 22" data-room="1:22:13:1"></div>
									<div class="x 23" data-room="1:23:13:1"></div>
									<div class="x 24" data-room="1:24:13:1"></div>
									<div class="x 25" data-room="1:25:13:1"></div>
									<div class="x 26" data-room="1:26:13:1"></div>
									<div class="x 27" data-room="1:27:13:1"></div>
									<div class="x 28" data-room="1:28:13:1"></div>
									<div class="x 29" data-room="1:29:13:1"></div>
									<div class="x 30" data-room="1:30:13:1"></div>
								</div>
								<div class="y 14  clearfix" data-yposition="14">
									<div class="x 0" data-room="1:0:14:1"></div>
									<div class="x 1" data-room="1:1:14:1"></div>
									<div class="x 2" data-room="1:2:14:1"></div>
									<div class="x 3" data-room="1:3:14:1"></div>
									<div class="x 4" data-room="1:4:14:1"></div>
									<div class="x 5" data-room="1:5:14:1"></div>
									<div class="x 6" data-room="1:6:14:1"></div>
									<div class="x 7" data-room="1:7:14:1"></div>
									<div class="x 8" data-room="1:8:14:1"></div>
									<div class="x 9" data-room="1:9:14:1"></div>
									<div class="x 10" data-room="1:10:14:1"></div>
									<div class="x 11" data-room="1:11:14:1"></div>
									<div class="x 12" data-room="1:12:14:1"></div>
									<div class="x 13" data-room="1:13:14:1"></div>
									<div class="x 14" data-room="1:14:14:1"></div>
									<div class="x 15" data-room="1:15:14:1"></div>
									<div class="x 16" data-room="1:16:14:1"></div>
									<div class="x 17" data-room="1:17:14:1"></div>
									<div class="x 18" data-room="1:18:14:1"></div>
									<div class="x 19" data-room="1:19:14:1"></div>
									<div class="x 20" data-room="1:20:14:1"></div>
									<div class="x 21" data-room="1:21:14:1"></div>
									<div class="x 22" data-room="1:22:14:1"></div>
									<div class="x 23" data-room="1:23:14:1"></div>
									<div class="x 24" data-room="1:24:14:1"></div>
									<div class="x 25" data-room="1:25:14:1"></div>
									<div class="x 26" data-room="1:26:14:1"></div>
									<div class="x 27" data-room="1:27:14:1"></div>
									<div class="x 28" data-room="1:28:14:1"></div>
									<div class="x 29" data-room="1:29:14:1"></div>
									<div class="x 30" data-room="1:30:14:1"></div>
								</div>
								<div class="y 15  clearfix" data-yposition="15">
									<div class="x 0" data-room="1:0:15:1"></div>
									<div class="x 1" data-room="1:1:15:1"></div>
									<div class="x 2" data-room="1:2:15:1"></div>
									<div class="x 3" data-room="1:3:15:1"></div>
									<div class="x 4" data-room="1:4:15:1"></div>
									<div class="x 5" data-room="1:5:15:1"></div>
									<div class="x 6" data-room="1:6:15:1"></div>
									<div class="x 7" data-room="1:7:15:1"></div>
									<div class="x 8" data-room="1:8:15:1"></div>
									<div class="x 9" data-room="1:9:15:1"></div>
									<div class="x 10" data-room="1:10:15:1"></div>
									<div class="x 11" data-room="1:11:15:1"></div>
									<div class="x 12" data-room="1:12:15:1"></div>
									<div class="x 13" data-room="1:13:15:1"></div>
									<div class="x 14" data-room="1:14:15:1"></div>
									<div class="x 15" data-room="1:15:15:1"></div>
									<div class="x 16" data-room="1:16:15:1"></div>
									<div class="x 17" data-room="1:17:15:1"></div>
									<div class="x 18" data-room="1:18:15:1"></div>
									<div class="x 19" data-room="1:19:15:1"></div>
									<div class="x 20" data-room="1:20:15:1"></div>
									<div class="x 21" data-room="1:21:15:1"></div>
									<div class="x 22" data-room="1:22:15:1"></div>
									<div class="x 23" data-room="1:23:15:1"></div>
									<div class="x 24" data-room="1:24:15:1"></div>
									<div class="x 25" data-room="1:25:15:1"></div>
									<div class="x 26" data-room="1:26:15:1"></div>
									<div class="x 27" data-room="1:27:15:1"></div>
									<div class="x 28" data-room="1:28:15:1"></div>
									<div class="x 29" data-room="1:29:15:1"></div>
									<div class="x 30" data-room="1:30:15:1"></div>
								</div>
								<div class="y 16  clearfix" data-yposition="16">
									<div class="x 0" data-room="1:0:16:1"></div>
									<div class="x 1" data-room="1:1:16:1"></div>
									<div class="x 2" data-room="1:2:16:1"></div>
									<div class="x 3" data-room="1:3:16:1"></div>
									<div class="x 4" data-room="1:4:16:1"></div>
									<div class="x 5" data-room="1:5:16:1"></div>
									<div class="x 6" data-room="1:6:16:1"></div>
									<div class="x 7" data-room="1:7:16:1"></div>
									<div class="x 8" data-room="1:8:16:1"></div>
									<div class="x 9" data-room="1:9:16:1"></div>
									<div class="x 10" data-room="1:10:16:1"></div>
									<div class="x 11" data-room="1:11:16:1"></div>
									<div class="x 12" data-room="1:12:16:1"></div>
									<div class="x 13" data-room="1:13:16:1"></div>
									<div class="x 14" data-room="1:14:16:1"></div>
									<div class="x 15" data-room="1:15:16:1"></div>
									<div class="x 16" data-room="1:16:16:1"></div>
									<div class="x 17" data-room="1:17:16:1"></div>
									<div class="x 18" data-room="1:18:16:1"></div>
									<div class="x 19" data-room="1:19:16:1"></div>
									<div class="x 20" data-room="1:20:16:1"></div>
									<div class="x 21" data-room="1:21:16:1"></div>
									<div class="x 22" data-room="1:22:16:1"></div>
									<div class="x 23" data-room="1:23:16:1"></div>
									<div class="x 24" data-room="1:24:16:1"></div>
									<div class="x 25" data-room="1:25:16:1"></div>
									<div class="x 26" data-room="1:26:16:1"></div>
									<div class="x 27" data-room="1:27:16:1"></div>
									<div class="x 28" data-room="1:28:16:1"></div>
									<div class="x 29" data-room="1:29:16:1"></div>
									<div class="x 30" data-room="1:30:16:1"></div>
								</div>
								<div class="y 17  clearfix" data-yposition="17">
									<div class="x 0" data-room="1:0:17:1"></div>
									<div class="x 1" data-room="1:1:17:1"></div>
									<div class="x 2" data-room="1:2:17:1"></div>
									<div class="x 3" data-room="1:3:17:1"></div>
									<div class="x 4" data-room="1:4:17:1"></div>
									<div class="x 5" data-room="1:5:17:1"></div>
									<div class="x 6" data-room="1:6:17:1"></div>
									<div class="x 7" data-room="1:7:17:1"></div>
									<div class="x 8" data-room="1:8:17:1"></div>
									<div class="x 9" data-room="1:9:17:1"></div>
									<div class="x 10" data-room="1:10:17:1"></div>
									<div class="x 11" data-room="1:11:17:1"></div>
									<div class="x 12" data-room="1:12:17:1"></div>
									<div class="x 13" data-room="1:13:17:1"></div>
									<div class="x 14" data-room="1:14:17:1"></div>
									<div class="x 15" data-room="1:15:17:1"></div>
									<div class="x 16" data-room="1:16:17:1"></div>
									<div class="x 17" data-room="1:17:17:1"></div>
									<div class="x 18" data-room="1:18:17:1"></div>
									<div class="x 19" data-room="1:19:17:1"></div>
									<div class="x 20" data-room="1:20:17:1"></div>
									<div class="x 21" data-room="1:21:17:1"></div>
									<div class="x 22" data-room="1:22:17:1"></div>
									<div class="x 23" data-room="1:23:17:1"></div>
									<div class="x 24" data-room="1:24:17:1"></div>
									<div class="x 25" data-room="1:25:17:1"></div>
									<div class="x 26" data-room="1:26:17:1"></div>
									<div class="x 27" data-room="1:27:17:1"></div>
									<div class="x 28" data-room="1:28:17:1"></div>
									<div class="x 29" data-room="1:29:17:1"></div>
									<div class="x 30" data-room="1:30:17:1"></div>
								</div>
                            </div> <!-- F1 -->
                        </div><!-- map-contnet -->
                    </div><!--＃map.program-->
                    <div id="popup" class="session_info"></div>
                </div><!-- #bd_wrap -->
            </div>

        </div>
        <div id="ft_wrap" class="clearfix">
			<div id="ft"  class="grid_12 clearfix">目前線上聊天功能無法在平板及手機上提供完整的服務，請您暫時使用電腦來瀏覽本網站。對您造成不便請見諒。<b</div>
			</div>
            <div id="all_wrap_bg"></div>
            <div id="animation_map_box"></div>
            <input id="personal_fb_id" name="personal_fb_id" type="hidden" value="">

            <div id="fb-root"></div>
			<script type="text/javascript">
			 // Edit to suit your needs.
             var ADAPT_CONFIG = {
				 // Where is your CSS?
                   path: '/assets/css/',

				 // false = Only run once, when page first loads.
                   // true = Change on window resize and page tilt.
                   dynamic: true,

				 // First range entry is the minimum.
                   // Last range entry is the maximum.
                   // Separate ranges by "to" keyword.
                   range: [
					 '0px    to 760px  = mobile.css?1375092209',
					 '760px  to 980px  = 720.css',
					 '980px  to 1280px = 1200.css',
					 '1280px to 1600px = 1200.css',
					 '1600px to 1940px = 1200.css',
					 '1940px to 2540px = 1200.css',
					 '2540px           = 1200.css'
				 ]
			 };
			</script>
			<script src="/assets/js/lib/jquery-1.9.1.js"></script>
			<script src="/assets/js/js_plugins.min.js"></script>
			<script src="/assets/js/lib/jquery.bpopup.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
			<script src="/assets/ls/g0v.js"></script>
			<script>
			 function LoadSlidesjs(){

				 //SlidesJS Required: Initialize SlidesJS with a jQuery doc ready
				 //use http://slidesjs.com/
				 $(function() {
					 $('#layer_slides').slidesjs({
						 width: 940,
						 height: 528,
						 navigation: {
							 //effect: "fade"
						 },
						 pagination: {
							 //effect: "fade"
						 },
						 effect: {
							 fade: {
								 // speed: 400
							 }
						 }
					 });
				 });
			 }
			</script>


			<script>
			 var blMobile = false;
			 var blShowRoomSession = true;

			 debug = function() {
				 console.log ($mapInfo);
			 }

			 $(function() {
				 fetchEthercalc(displayRoom);
			 });


			</script>
            <script src="/assets/js/event.js?ts=1375589732"></script>
            <script src="/assets/js/facebook.js?08021115"></script>
    </body>
</html>
