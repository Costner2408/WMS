<a href="{{ route('detail',$profile->id) }}" class="btn btn-info" role="button">Detail</a></td>
<a href="{{ route('buat') }}" class="btn btn-info" role="button">Create Data</a>
<form action="{{route('buat')}}" method='post'>
<a href="{{ route('index') }}" class="btn btn-info" role="button">Home</a>
<button onclick="document.location='default.asp'">HTML Tutorial</button>



@csrf
{{ csrf_token() }}

<input type="hidden" name="csrf" value="csrf-token" />

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="Nama..."><br>
  <label for="idalat">Id Alat:</label><br>
  <input type="text" id="idalat" name="idalat" placeholder="Id Alat..."><br>
  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat" placeholder="Alamat..."><br>
  <label for="phone">No.Hp:</label><br>
  <input type="text" id="phone" name="phone" value="08789376067"><br><br>
  <label for="phone">No.Rekening:</label><br>
  <input type="text" id="pob" name="pob" value="Seoul" ><br>
  <input type="submit" value="Submit">
</form>




<th>Nama</th>
    <th>Id_Alat</th>
    <th>Alamat</th>
    <th>Handphone number</th>
    <th>No.Rekening</th>
  </tr>
 @foreach($akun as $profile)
 <tr>
 <div class="text-center">
    <td>{{ $profile->Nama }}
        <td> {{ $profile->Id_Alat }}
          <td>{{ $profile->Alamat }}
            <td>{{ $profile->No_HP }}
             <td>{{ $profile->No_Rekening }}
    </td>
    <td><a href="{{ route('detail',$profile->id) }}" class="btn btn-info" role="button">Detail</a></td>
    <td>
        <form action="{{route('delete', $profile->id)}}" method="post">
        @csrf
            <input type="hidden" name="_method" value="delete" />
            <input type="submit" value="delete"/>
        </form>
    </td>
    </tr>
    <tr>

    </tr>

  </div>  
 @endforeach

 <!-- public function create(Request $request){
    
    $profile = new Profile;
    $profile->Nama = $request->name;
    $profile->Id_Alat = $request->pob;
    $profile->Alamat = $request->dob;
    $profile->No_HP = $request->phone;
    $profile->No_Rekening = $request->rek;
    $profile->save();

    return redirect()->back(); -->
 <!-- -------------------------------------- -->
    <!-- public function creating() {
        return view('profil.create');
    }

    public function reading() {
        $akun = Profile::all(); 


        return view('profil.index', compact('profiles'));

    }

    public function detail($id) {
        $profile = Profile::find($id);
        return view('profil.detail', compact('profile', 'id'));
    }

    public function update($id) {
        $profile = Profile::find($id);
        return view('hah.updet', compact('profile','id')); -->

<!-- public function apdet(Request $req,$id){

$profile = Profile::find($id);
$profile->Nama = $req->name;
    $profile->Id_Alat = $req->pob;
    $profile->Alamat = $req->dob;
    $profile->No_HP = $req->phone;
    $profile->No_Rekening = $req->rek;
    $profile->save();


    return redirect()->route('index');
} -->

<!-- public function delete($id){

Profile::find($id)->delete();

return redirect()->back();
} -->
}