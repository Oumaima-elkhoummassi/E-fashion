import { getFirstLevelOptions } from 'blocksy-options'

export const getAttributesFromOptions = (options) => {
	return Object.entries(getFirstLevelOptions(options)).reduce((acc, item) => {
		const blocksyType = item[1].type

		let type = 'string'

		if (blocksyType === 'ct-number') {
			type = 'number'
		}

		if (
			blocksyType === 'ct-visibility' ||
			blocksyType === 'ct-checkboxes' ||
			blocksyType === 'ct-image-uploader'
		) {
			type = 'object'
		}

		if (blocksyType === 'ct-layers') {
			type = 'array'
		}

		acc[item[0]] = {
			type,
			default: item[1].value,
		}

		return acc
	}, {})
}

export const getOptionsForBlock = (blockName) => {
	return (
		(window.ct_localizations || window.ct_customizer_localizations)
			?.gutenberg_blocks_data?.[blockName] || []
	)
}
