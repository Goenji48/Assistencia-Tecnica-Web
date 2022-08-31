var conn = new ActiveXObject("ADODB.Connection")
var conn_str = ""

function show_data(){
    conn_str = "Provider=SQLEXPRESS;Data Source=DESKTOP-I861L00; User Id=sa; password=12345; Initial Catalog=AssistenciaTecnicaTeste";
    configureDatabase()
}

function configureDatabase(){
    try{
        conn.Open(conn_str)
        alert(conn)
    } catch(e){
        alert("Erro ao criar conexão com o banco")
    }
}