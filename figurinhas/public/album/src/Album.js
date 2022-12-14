import { useEffect, useState } from "react";
import { Local } from "./Local";

export const Album = ({ colaFigurinha, positionMin, positionMax }) => {
    const [album, setAlbum] = useState([]);

    useEffect(() => {
        const load = async () => {
            if (positionMin == 1) {
                fetch("http://127.0.0.1:8000/figurinhasUsuario/1", {
                    method: "POST", // or 'PUT'
                    headers: {
                        "Content-Type": "application/json",
                    },                    
                })
                    .then((response) => response.json())
                    .then((data) => {
                        console.log("Success:", data);
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                    });
            }
        };
        load();
    }, []);

    const posicaoFigurinha = (positionMin, positionMax) =>
        album.filter((pos) => pos.pos >= positionMin && pos.pos <= positionMax);

    return (
        <div
            style={{
                display: "grid",
                border: "solid 1px #785e3a",
                width: "100%",
                height: "500px",
                gridTemplateColumns: "200px 200px 200px",
                gridRowStart: "1",
                gridRowEnd: "3",
            }}
        >
            {album
                .filter(
                    (pos) => pos.pos >= positionMin && pos.pos <= positionMax
                )
                .map((local) => (
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
