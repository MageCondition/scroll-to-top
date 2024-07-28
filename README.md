# Magento 2 Scroll To Top Extension

![Magento 2](https://img.shields.io/badge/Magento-2-brightgreen.svg)
![License](https://img.shields.io/badge/license-MIT-blue.svg)

## Overview

The **Magento 2 Scroll To Top** extension adds a customizable button that allows users to scroll back to the top of the page easily. This enhances the user experience, especially on long pages.

## Key Features

- Extension can be easily disabled or enabled.
- Customize the color of the scroll-to-top icon and button background using a color picker provided by https://github.com/mrgrain/colpick.
- Can be configured for different scopes (Global, Website, Store View).

### Advanced Configuration

- **Position**: Set the position of the button (Right Bottom or Left Bottom).
- **Button Type**: Choose the button shape (Round, Square).
- **Breakpoint**: Define the scroll distance for the button to appear.
- **Side Margin**: Adjust the side margin for the button.
- **Bottom Margin**: Adjust the bottom margin for the button.

<img width="1606" alt="image" src="https://github.com/user-attachments/assets/97d4f33f-e39f-43c8-963d-41d3173ed7b5">


## Installation

Follow these steps to install the extension:

1. **Require the extension via Composer**

    ```bash
    composer require mage-condition/scroll-to-top
    ```

2. **Run Magento setup upgrade**

    ```bash
    php bin/magento setup:upgrade
    ```

3. **Deploy static content (if in production mode)**

    ```bash
    php bin/magento setup:static-content:deploy
    ```

4. **Clear the cache**

    ```bash
    php bin/magento cache:clean
    ```

## Usage

1. Navigate to the **Stores** section in the Magento admin panel.
2. Go to **Configuration > MageCondition > Scroll To Top**.
3. Configure the settings as per your requirements.
4. Save the changes.
5. Refresh the cache.

## Demo

![demo2 (1)](https://github.com/user-attachments/assets/f96e74bc-f63c-442c-b0d7-3738b072ff74)

## Compatibility

- PHP 8.0 or higher
- Magento Open Source (CE) 2.4.x
- Adobe Commerce (EE) 2.4.x

## Support

If you encounter any issues or have questions regarding the extension, please open an issue on the [GitHub repository](https://github.com/MageCondition/scroll-to-top).

You can also reach us via email at [wincondition2911@gmail.com](mailto:wincondition2911@gmail.com).

## License

This module is licensed under the Open Software License (OSL). See the [LICENSE](https://github.com/MageCondition/scroll-to-top/blob/main/LICENSE.txt) file for more details.
