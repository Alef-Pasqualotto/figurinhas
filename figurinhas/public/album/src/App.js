import React from "react";
import "./styles.css";
import HTMLFlipBook from "react-pageflip";

const Page = React.forwardRef((props, ref) => {
  return (
    <div className="page" ref={ref}>
      <h1>Álbum de Figurinhas da Turma</h1>
      <p>{props.children}</p>
    </div>
  );
});

function MyBook(props) {
  return (
    <HTMLFlipBook width={600} height={600} showCover={true}>
      <Page number="1"><h1>Olá</h1></Page>
      <Page number="2">Page text</Page>
      <Page number="3">Page text</Page>
      <Page number="4">Page text</Page>
      <Page number="5">Page text</Page>
      <Page number="6">Page text</Page>
    </HTMLFlipBook>
  );
}

export default function App() {
  return (
    <div className="App">
      <MyBook />
    </div>
  );
}

