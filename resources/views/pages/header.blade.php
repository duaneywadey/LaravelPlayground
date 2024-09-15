<h1>
	<?php echo "Header section"; ?>
</h1>

@foreach ($names as $key => $value)
	<p>{{ $key }} - {{ $value }}</p>
@endforeach