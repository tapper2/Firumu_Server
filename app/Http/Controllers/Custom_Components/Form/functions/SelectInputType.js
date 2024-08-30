import MailElement from "../formsElements/MailElement";
import InputElement from "../formsElements/InputElement";

const selectInputType = (item) => {
  switch (item.type) {
    case "text":
      return <InputElement item={item} />;
    case "mail":
      return <MailElement item={item} />;
    default:
      return "this is default";
  }
};

export default selectInputType;
