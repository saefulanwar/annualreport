@section('script')
	<script src="{{ asset('/js/selectize.min.js') }}"></script>
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
        $('#role').selectize({
		    create: true,
		    sortField: 'text'
		});       
    </script>
@endsection
