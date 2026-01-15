import Card, {CardBody} from "./components/Card";
import List from "./components/List";
import Contador from "./components/Contador";
function App(){
  
  
  const primeraFila = ["jorge", "miriam", "patri"];
  return <Card>
  <CardBody 
  titleZ="Hola Mundo" 
   subtitle="Adios Mundo"
    text="este es el texto del body" />


   <List data = {primeraFila} />


   <Contador data ={0} />

  </Card>
}
export default App;