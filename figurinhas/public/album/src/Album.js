import { useState } from "react";
import { Local } from "./Local";

export const Album = ({ colaFigurinha, positionMin, positionMax }) => {
  const [album, setAlbum] = useState([
    { id: 1, pos: 1, f: null },
    { id: 2, pos: 2, f: null },
    { id: 3, pos: 3, f: null },
    { id: 4, pos: 4, f: null},
    { id: 5, pos: 5, f: null},
    { id: 6, pos: 6, f: null}
  ]);

  const posicaoFigurinha = (positionMin, positionMax) =>
    album.filter((pos) => pos.pos >= positionMin && pos.pos <= positionMax)

  return (
    <div
      style={{
        display: "grid",
        border: "solid 1px #785e3a",
        width: "100%",
        height: "500px",
        gridTemplateColumns: "200px 200px 200px",
        gridRowStart: "1",
        gridRowEnd: "3"
      }}
    >
      {album.filter((pos) => pos.pos >= positionMin && pos.pos <= positionMax).map((local) => (
        <Local
          key={local.id}
          local={local}
          setAlbum={setAlbum}
          colaFigurinha={colaFigurinha}
          posicao={posicaoFigurinha}
        />
      ))}
    </div>
  );
};
