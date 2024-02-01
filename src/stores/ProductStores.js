import { defineStore } from "pinia";
import C1 from "../assets/image/coffee/hot1.png";

export const useProductStore = defineStore("Product_Store", {
  state: () => ({
    Button: [
      {
        RouterLink: "/Hot",
        btn_bg: "#3a5553",
        btn_text: "Hot",
      },
      {
        RouterLink: "/Ice",
        btn_bg: "#3a5553",
        btn_text: "ICE",
      },
      {
        RouterLink: "/Frappe",
        btn_bg: "#3a5553",
        btn_text: "FRAPPE",
      },
    ],
    Card: [
      {
        bg_card: "",
        img_card: C1,
        super_text: "Hot Espresso",
        sub_text:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card: "$ 1.99",
      },
      {
        bg_card: "",
        img_card: C1,
        super_text: "Hot Espresso",
        sub_text:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card: "$ 1.99",
      },
      {
        bg_card: "",
        img_card: C1,
        super_text: "Hot Espresso",
        sub_text:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card: "$ 1.99",
      },
      {
        bg_card: "",
        img_card: C1,
        super_text: "Hot Espresso",
        sub_text:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card: "$ 1.99",
      },
      {
        bg_card: "",
        img_card: C1,
        super_text: "Hot Espresso",
        sub_text:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card: "$ 1.99",
      },
      {
        bg_card: "",
        img_card: C1,
        super_text: "Hot Espresso",
        sub_text:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card: "$ 1.99",
      },
    ],
  }),
  getters: {
    doublCount: (state) => state.count,
  },
});
