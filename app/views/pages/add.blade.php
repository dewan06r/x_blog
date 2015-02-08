@extends('layouts.default')
				@section('add_panel')
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<div class="container">
							<div class="row">
								<div class="col-sm-5 col-sm-offset-1">
									<div class="login-form"><!--login form-->
										<h2 class="title text-center">Create Student</h2>
										<form method="post" enctype="multipart/form-data" action="#">
											<input type="text" name="name" placeholder="Name" required="required" />
											<input type="email" name="email" placeholder="Email Address" required="required" />
											<input type="text" name="user_name" placeholder="Username" required="required" />
											<input id="password" type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" required="required" />
											<label id="show_pass"></label>
											<input id="generator" type="button" value="Generate Random Password" />
											<input type="text" name="mobile" onkeypress='validate(event)' placeholder="Mobile" required="required" />
											<input type="file" accept="image/*" name="picture" onchange="showMyImage(this)" required="required" />
											<label>Permission</label>
											<div class="permission">
												<span><label class="labeling">View</label><input class="checked" type="checkbox" name="permission[]" value="1" /></span><br/>
												<span><label class="labeling">Create</label><input class="checked" type="checkbox" name="permission[]" value="1" /></span><br/>
												<span><label class="labeling">Update</label><input class="checked" type="checkbox" name="permission[]" value="1" /></span><br/>
												<span><label class="labeling">Delete</label><input class="checked" type="checkbox" name="permission[]" value="1" /></span><br/>
											</div>
											<script type="text/javascript">
												function validate(evt) {
													var theEvent = evt || window.event;
												    var key = theEvent.keyCode || theEvent.which;

												    // 0-9, backspace, left and right arrows
												    var allowedKeyCodes = [48,49,50,51,52,53,54,55,56,57,8,37,39]; 

												    if(allowedKeyCodes.indexOf(key) === -1) {
												        theEvent.returnValue = false;
												        if(theEvent.preventDefault) theEvent.preventDefault();
												    }
												}
												function showMyImage(fileInput) {
											        var files = fileInput.files;
											        for (var i = 0; i < files.length; i++) {           
											            var file = files[i];
											            var imageType = /image.*/;     
											            if (!file.type.match(imageType)) {
											                continue;
											            }           
											            var img=document.getElementById("thumbnil");            
											            img.file = file;    
											            var reader = new FileReader();
											            reader.onload = (function(aImg) { 
											                return function(e) { 
											                    aImg.src = e.target.result; 
											                }; 
											            })(img);
											            reader.readAsDataURL(file);
											        }    
											    }
											</script>

											<input type="hidden" name="add_admin" value="c_admin" />
											<button name="add_user" type="submit" class="btn btn-default">Create Admin</button>
										</form>
									</div><!--/login form-->
								</div>
								<div class="col-sm-3 col-sm-offset-1">
									<img id="thumbnil" style="width:50%; margin-top:20px;"  src="" alt=""/>
								</div>
							</div>
						</div>					
					</div>
				</div>	
				@stop