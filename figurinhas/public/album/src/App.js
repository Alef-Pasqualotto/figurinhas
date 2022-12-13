import React, { useState } from "react";
import "./styles.css";
import HTMLFlipBook from "react-pageflip";
import { Album } from "./Album";
import { DndProvider } from "react-dnd";
import {HTML5Backend} from 'react-dnd-html5-backend';


const Page = React.forwardRef((props, ref) => {
  return (
    <div className="page" ref={ref}>
      <h1 style={{margin: "1rem"}}>Álbum de Figurinhas da Turma</h1>
      <div>{props.children}</div>
    </div>
  );
});

function MyBook(props) {
  const [figurinhas, setFigurinhas] = useState([
    { id: 1, pos: 1, name: "Ronaldo" },
    { id: 3, pos: 1, name: "Ronaldo" },
    { id: 2, pos: 3, name: "Rivaldo" },
  ]);

  const colaFigurinha = (id) =>
    setFigurinhas((p) => p.filter((f) => f.id !== id)); 


  return (
    <HTMLFlipBook width={600} height={600} showCover={true} >
      <Page number="1"><h1>Olá</h1></Page>
      <Page number="2"><Album colaFigurinha={colaFigurinha} positionMin = {1} positionMax={6}/></Page>
      <Page number="3"><Album colaFigurinha={colaFigurinha} positionMin = {7} positionMax={12}/></Page>
      <Page number="4"><Album colaFigurinha={colaFigurinha} positionMin = {13} positionMax={18}/></Page>
      <Page number="5"><Album colaFigurinha={colaFigurinha} positionMin = {19} positionMax={24}/></Page>
      <Page number="6"><Album colaFigurinha={colaFigurinha} positionMin = {25} positionMax={30}/></Page>
    </HTMLFlipBook>
  );
}

export default function App() {
  return (
    <DndProvider backend={HTML5Backend}>
      <div className="App" style={{ display: "flex" }}>
        <MyBook />
      </div>
    </DndProvider>
  );
}

