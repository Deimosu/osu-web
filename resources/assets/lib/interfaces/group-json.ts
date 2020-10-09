// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

export default interface GroupJSON {
  colour: string;
  id: number;
  identifier: string;
  is_probationary: boolean;
  name: string;
  playmodes?: number[];
  short_name: string;
}
