<div class="form-group {{{ $errors->has('title') ? 'has-error' : '' }}}">
	{{ Form::label('title', 'Post title', array('class' => 'form-control')) }}
	{{ Form::text('title', Input::old('title'))}}
	{{ $errors->first('body', '<p class="help-block">:message</p>') }}
</div>
<div class="form-group {{{ $errors->has('title') ? 'has-error' : '' }}}">
	{{ Form::label('title', 'Post title', array('class' => 'form-control')) }}
	{{ Form::text('title', Input::old('title'))}}
	{{ $errors->first('body', '<p class="help-block">:message</p>') }}
</div>