import { useState } from "react";

interface ListProps{
    data:number;
}
function Contador({data}: ListProps){
    const [index, setIndex] = useState<number>(data);

    return (
        <div>
            <h2>contador: {index}</h2>
            <button onClick={() => setIndex(index +1)} >aumentar</button>
            <button onClick={() => setIndex(index -1)} >disminuir</button>
            <button onClick={() => setIndex(0)} >Reset</button>
            
        </div>
    )

}export default Contador;