<div class='form-group {{$col_width}} {{$header_group_class}} {{ ($errors->first($name))?"has-error":"" }}' id='form-group-{{$name}}' style="{{@$form['style']}}">
							<label>{{$form['label']}} {!!($required)?"<span class='text-danger' title='This field is required'>*</span>":"" !!}</label>
							<div class="input-group">
			                	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			                	<input type='email' title="{{$form['label']}}" {{$required}} {{$readonly}} {!!$placeholder!!} {{$disabled}} {{$validation['max']?"maxlength=$validation[max]":""}} class='form-control' name="{{$name}}" id="{{$name}}" value='{{$value}}'/>
			              	</div>							
							<div class="text-danger">{!! $errors->first($name)?"<i class='fa fa-info-circle'></i> ".$errors->first($name):"" !!}</div>
							<p class='help-block'>{{ @$form['help'] }}</p>
						</div>