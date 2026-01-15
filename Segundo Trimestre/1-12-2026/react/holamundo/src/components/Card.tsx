import type { ReactNode } from "react";

interface CardProps{
    children: ReactNode;
}


function Card(props: CardProps){
    const{children} = props;
return (
    <div className="card" style = { {width:"350px"} }>
    <div className="card-body">{children} </div>
    </div>
);
}

interface CardBodyProps{
    titleZ:string;
    subtitle:string;
    text?:string;
}


export function CardBody(props: CardBodyProps){
    const {titleZ, subtitle, text} = props;
    return (
        <div>
         <h5 className="card-title">{titleZ}</h5>
    <h6 className="card-subtitle mb-2 text-body-secondary">{subtitle}</h6>
    <p className="card-text">{text}</p>
    </div>
    );
}
export default Card;