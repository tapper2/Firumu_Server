import React from "react";
import "./Form.css";
import selectInputType from "./functions/SelectInputType";

function Form({ items }) {
  return (
    <div className="formContainer">
      <form className="p-0">
        {items.map((item, index) => {
          return (
            <div key={index} className="mt-4">
              {selectInputType(item)}
            </div>
          );
        })}
      </form>
    </div>
  );
}
export default Form;
