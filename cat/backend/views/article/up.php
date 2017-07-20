<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Nav</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
							Article
								<small>
									<i class="icon-double-angle-right"></i>
									add
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" method="post" action="/?r=article/up">
								<input type="hidden" value="<?php echo $data['news_id']?>" name="news_id">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻短标题： </label>

										<div class="col-sm-9">
											<div class="col-xs-12 col-sm-3">
												<input id="form-field-1"  placeholder=" nav name " class="col-xs-10 col-sm-12" type="text" name="news_short_title" value="<?php echo $data['news_short_title']?>">
											</div>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻标题: </label>

										<div class="col-sm-9">
											<div class="col-xs-12 col-sm-3">
												<input id="form-field-1"  placeholder=" nav name " class="col-xs-10 col-sm-12" type="text" name="news_title" value="<?php echo $data['news_title']?>">
											</div>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻内容: </label>

										<div class="col-sm-9">
											<div class="col-xs-12 col-sm-3">
												<input id="form-field-1"  placeholder=" nav name " class="col-xs-10 col-sm-12" type="text" name="news_content"value="<?php echo $data['news_content']?>">
											</div>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻分类: </label>

										<div class="col-sm-9">
											<div class="col-xs-12 col-sm-3">
												<select name='news_sort' value="<?php echo $data['news_sort']?>">
													<option value="新闻">新闻</option>
													<option value="政策">政策</option>
																								
												</select>
											</div>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 作者: </label>

										<div class="col-sm-9">
											<div class="col-xs-12 col-sm-3">
												<input id="form-field-1"  placeholder=" nav name " class="col-xs-10 col-sm-12" type="text" name="news_addmen" value="<?php echo $data['news_addmen']?>">

											</div>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-2 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												嗯
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

									

									
								</form>

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
				</div>