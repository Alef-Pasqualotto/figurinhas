import React from "react";
import { Figurinha } from "./Figurinha";

export const MinhasFigurinhas = ({ figurinhas }) => {
  return (
    <div style={{ display: "flex", flexDirection: "column", width: "140px", height: "180" }}>
      {figurinhas.map((f) => (
        <Figurinha key={f.id} f={f} />
      ))}
    </div>
  );
};
