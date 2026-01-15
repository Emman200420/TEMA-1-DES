import { useState } from "react";

interface ListProps {
    data:string[];
}

function List(props: ListProps){
    const [index, setIndex] = useState<number>(1);
    const { data } = props;
    
    const handleClick = (i: number) =>{
        setIndex(i);
    };
    return (

        <ul className="list-group">
            {
                data.map((elemento, i)=> (

                    <li 
                    onClick={() => handleClick(i)}
                    className={`list-group-item ${index == i ? "active " : ""}`}
                    >
                    {elemento}

                    </li>
                ))
            }

        
        </ul>
    );

}export default List;