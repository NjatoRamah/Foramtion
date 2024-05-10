@foreach ($info as $abouts)
    
    <ul>
      <li>
        <h6>Numero télephone</h6>
        <span>{{ $abouts->numero }} </span>
      </li>
      <li>
        <h6>Addresse Email</h6>
        <span>{{ $abouts->email }} </span>
      </li>
      <li>
        <h6>Addresse</h6>
        <span>{{ $abouts->Adresse }} </span>
      </li>
      <li>
        <h6>Site Web officiel</h6>
        <span>{{ $abouts->site }} </span>
      </li>
    </ul>
    
@endforeach