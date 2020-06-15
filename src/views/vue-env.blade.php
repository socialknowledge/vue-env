<script>
    window.{{ $object_name }} = {};
    @foreach($data as $key => $value)
        window.{{ $object_name }}.{{ $key  }}=@if (is_bool($value))'{!! json_encode($value) !!}'@elseif(is_int($value) || is_float($value)){{ $value }}@else {!! json_encode($value) !!}@endif;
    @endforeach
</script>

