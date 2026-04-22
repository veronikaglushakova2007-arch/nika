use Illuminate\Support\Facades\DB;

public function index()
{
    $users = DB::table('users')->get();
    dump($users);
}
