@extends('layouts.app')

@section('content')
<h3><strong>Jina la Shule  </strong>{{ $show->schoolname }}</h3>
<p><strong>Tarehe. </strong>{{ $show->created_at }}</p>
<p><strong>Namba ya Shule  </strong>{{ $show->schoolnumber }}</p>
<p><strong>Wilaya  </strong>{{ $show->district }}</p>
<p><strong>Kata   </strong>{{ $show->ward }}</p>
<p><strong>Headmaster   </strong>{{ $show->headmaster }}</p>
<p><strong>S.L.P   </strong>{{ $show->slp }}</p>
<p><strong>Mmiliki wa Shule   </strong>{{ $show->owners }}</p>
<p><strong>Jinsi   </strong>{{ $show->jinsi }}</p>
<p><strong>Ngazi ya Shule   </strong>{{ $show->ngazi }}</p>
<p><strong>Namba ya Simu   </strong>{{ $show->phone }}</p>
<p><strong>Email  </strong>{{ $show->email }}</p>
@endsection
