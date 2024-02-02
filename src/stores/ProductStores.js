import { defineStore } from "pinia";
import C1 from "../assets/image/coffee/hot1.png";
import Ice from "../assets/image/coffee/ice2.png";
import Frappe from "../assets/image/coffee/frappe9.png";

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
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
      {
        bg_card_hot: "",
        img_card_hot: C1,
        super_text_hot: "Hot Espresso",
        sub_text_hot:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_hot: "$ 1.99",
      },
    ],
    CardIce: [
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
      {
        bg_card_ice: "",
        img_card_ice: Ice,
        super_text_ice: "Hot Espresso",
        sub_text_ice:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_ice: "$ 1.99",
      },
    ],
    CardFrappe: [
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
      {
        bg_card_frappe: "",
        img_card_frappe: Frappe,
        super_text_frappe: "Hot Espresso",
        sub_text_frappe:
          "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the",
        dollar_card_frappe: "$ 1.99",
      },
    ],
  }),
  getters: {
    doublCount: (state) => state.count,
  },
});
