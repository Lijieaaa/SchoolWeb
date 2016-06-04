<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>topnav</title>
	<link rel="stylesheet" href="../../css/topnav.css">
</head>
<body>
	<div class="ad-message">
                        <div class="ad-top-left">
                            <div class="ad-change-btn"><a id="ad-list" href="javascript:;" class="scm ad-list-btn"></a></div>
                            <div class="ad-search-box clear">
                                <div class="ad-search-sel">
                                    <select>
                                        <option>类别</option>
                                        <option>计算机</option>
                                        <option>国际商务</option>
                                        <option>工商管理</option>
										<option>建筑设计</option>
										<option>外语外贸</option>
                                    </select>
                                </div>
                                <div class="ad-search-cha">
                                    <input type="text" class="ad-search-input" placeholder="请输入你要查找的内容">
                                    <input type="submit" class="scm ad-search-btn" value=""> 
                                </div>
                            </div>
                        </div>
                        <div class="ad-top-right">
                            <div class="ad-notice">
                                <ul>
                                    <li>
                                        <a href="javascript:;" class="scm nt1"><span class="scm nt-count dot">12</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="scm nt2"><span class="scm nt-count dot">12</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="scm nt3"><span class="scm nt-count dot">12</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ad-welcom">
                                <div class="ad-wel-img"><img src="../../img/adlogo.png" height="36" width="36"></div>
                                <div class="ad-wel-text">
                                    <div class="font-wel">
									欢迎您！<strong><?php 
									if( $_SESSION['adminname'] != null)
									echo $_SESSION['adminname'];?></strong>
									</div>
                                    <div class="font-wel">
									<strong>
									<a href="logout.php">【注销】</a>
									<strong>
									
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
</body>
</html>