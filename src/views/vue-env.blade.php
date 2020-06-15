<script>
    window.{{ $object_name }} = {};
    @foreach($data as $key => $value)
        window.{{ $object_name }}.{{ $key  }} = '{!! json_encode($value) !!}'
    @endforeach
</script>

