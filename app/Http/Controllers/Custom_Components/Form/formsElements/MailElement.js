import React from "react";

export default function MailElement({ item }) {
  return (
    <div className="form-group">
      <label htmlFor="exampleInputEmail1">{item.name}</label>
      <input
        type="email"
        className="form-control"
        id={item.name}
        placeholder={item.placeholder}
      />
      <small id="emailHelp" className="form-text text-muted">
        We'll never share your email with anyone else.
      </small>
    </div>
  );
}
